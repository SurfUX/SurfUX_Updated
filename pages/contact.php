
<?php

require_once __DIR__ . '/../includes/config.php';

/*
|--------------------------------------------------------------------------
| PHPMailer
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/../PHPMailer/src/Exception.php';
require_once __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


/*
|--------------------------------------------------------------------------
| Page Settings
|--------------------------------------------------------------------------
*/

$page_title = 'Contact SurfUX | Start a Project';

$sent = false;
$error = '';


/*
|--------------------------------------------------------------------------
| Contact Form Submission
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');


    /*
    |--------------------------------------------------------------------------
    | Validation
    |--------------------------------------------------------------------------
    */

    if ($name === '' || $email === '' || $message === '') {

        $error = 'Please fill in all required fields.';

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = 'Please enter a valid email address.';

    } else {

        $mail = new PHPMailer(true);

        try {

            /*
            |--------------------------------------------------------------------------
            | Gmail SMTP
            |--------------------------------------------------------------------------
            */

            $smtp_host = getenv('SURFUX_SMTP_HOST') ?: 'smtp.gmail.com';
            $smtp_username = getenv('SURFUX_SMTP_USERNAME') ?: '';
            $smtp_password = getenv('SURFUX_SMTP_PASSWORD') ?: '';
            $smtp_from = getenv('SURFUX_MAIL_FROM') ?: $smtp_username;
            $smtp_to = getenv('SURFUX_MAIL_TO') ?: 'gihan@surfux.com';

            if ($smtp_username === '' || $smtp_password === '' || $smtp_from === '') {
                throw new Exception('Email is not configured. Set the SurfUX SMTP environment variables in the hosting environment.');
            }

            $mail->isSMTP();
            $mail->Host = $smtp_host;
            $mail->SMTPAuth = true;
            $mail->Username = $smtp_username;
            $mail->Password = $smtp_password;


            /*
            |--------------------------------------------------------------------------
            | SMTP Security
            |--------------------------------------------------------------------------
            */

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;


            /*
            |--------------------------------------------------------------------------
            | Sender
            |--------------------------------------------------------------------------
            */

            $mail->setFrom(
                $smtp_from,
                'SurfUX Website'
            );


            /*
            |--------------------------------------------------------------------------
            | Receiver
            |--------------------------------------------------------------------------
            */

            $mail->addAddress(
                $smtp_to,
                'SurfUX'
            );


            /*
            |--------------------------------------------------------------------------
            | Reply To
            |--------------------------------------------------------------------------
            |
            | Clicking Reply in Gmail will reply directly to the visitor.
            |
            */

            $mail->addReplyTo(
                $email,
                $name
            );


            /*
            |--------------------------------------------------------------------------
            | Email Content
            |--------------------------------------------------------------------------
            */

            $mail->isHTML(true);

            $mail->Subject =
                'New SurfUX Website Enquiry - ' . $name;


            $mail->Body = '
                <div style="
                    font-family: Arial, Helvetica, sans-serif;
                    max-width: 650px;
                    margin: 0 auto;
                    color: #222;
                ">

                    <h2 style="
                        margin-bottom: 25px;
                        color: #111116;
                    ">
                        New SurfUX Website Enquiry
                    </h2>


                    <table
                        cellpadding="8"
                        cellspacing="0"
                        width="100%"
                        style="
                            border-collapse: collapse;
                            font-size: 14px;
                        "
                    >

                        <tr>
                            <td style="
                                font-weight: bold;
                                width: 150px;
                                padding: 10px 8px;
                                border-bottom: 1px solid #eee;
                            ">
                                Name
                            </td>

                            <td style="
                                padding: 10px 8px;
                                border-bottom: 1px solid #eee;
                            ">
                                ' . htmlspecialchars($name) . '
                            </td>
                        </tr>


                        <tr>
                            <td style="
                                font-weight: bold;
                                padding: 10px 8px;
                                border-bottom: 1px solid #eee;
                            ">
                                Email
                            </td>

                            <td style="
                                padding: 10px 8px;
                                border-bottom: 1px solid #eee;
                            ">
                                ' . htmlspecialchars($email) . '
                            </td>
                        </tr>


                        <tr>
                            <td style="
                                font-weight: bold;
                                padding: 10px 8px;
                                border-bottom: 1px solid #eee;
                            ">
                                Company
                            </td>

                            <td style="
                                padding: 10px 8px;
                                border-bottom: 1px solid #eee;
                            ">
                                ' . htmlspecialchars(
                                    $company ?: 'Not provided'
                                ) . '
                            </td>
                        </tr>


                        <tr>
                            <td style="
                                font-weight: bold;
                                padding: 10px 8px;
                            ">
                                Service
                            </td>

                            <td style="
                                padding: 10px 8px;
                            ">
                                ' . htmlspecialchars($service) . '
                            </td>
                        </tr>

                    </table>


                    <div style="margin-top: 30px;">

                        <h3 style="
                            color: #111116;
                            margin-bottom: 12px;
                        ">
                            Project Details
                        </h3>


                        <div style="
                            background: #f5f5f5;
                            padding: 20px;
                            border-radius: 8px;
                            line-height: 1.7;
                            font-size: 14px;
                        ">
                            ' . nl2br(
                                htmlspecialchars($message)
                            ) . '
                        </div>

                    </div>


                    <p style="
                        margin-top: 30px;
                        font-size: 12px;
                        color: #777;
                    ">
                        This enquiry was submitted through the SurfUX website.
                    </p>

                </div>
            ';


            /*
            |--------------------------------------------------------------------------
            | Plain Text Version
            |--------------------------------------------------------------------------
            */

            $mail->AltBody =
                "New SurfUX Website Enquiry\n\n" .
                "Name: " . $name . "\n" .
                "Email: " . $email . "\n" .
                "Company: " . ($company ?: 'Not provided') . "\n" .
                "Service: " . $service . "\n\n" .
                "Project Details:\n" .
                $message;


            /*
            |--------------------------------------------------------------------------
            | Send Email
            |--------------------------------------------------------------------------
            */

            $mail->send();

            $sent = true;


        } catch (Exception $e) {

            /*
            |--------------------------------------------------------------------------
            | User-friendly error
            |--------------------------------------------------------------------------
            */

            $error =
                'Sorry, we could not send your message right now. ' .
                'Please try again later.';

            /*
            |--------------------------------------------------------------------------
            | Server error log
            |--------------------------------------------------------------------------
            */

            error_log(
                'SurfUX Contact Form Error: ' .
                $mail->ErrorInfo
            );
        }
    }
}


include __DIR__ . '/../includes/header.php';

?>


<main>

<section class="page-hero contact-hero">

    <div class="container">

        <span class="eyebrow">
            START A PROJECT
        </span>

        <h1>
            Let's make your next digital move
            <em>a good one.</em>
        </h1>

        <p>
            Tell us a little about what you need. Whether you're starting
            from scratch or improving something that already exists,
            we'd love to hear about it.
        </p>

    </div>

</section>


<section class="section section-light">

    <div class="container contact-grid">


        <!-- Contact Information -->

      
<div class="contact-info">

    <span class="eyebrow">
        LET'S CONNECT
    </span>

    <h2>
        Tell us what you're
        <em>thinking.</em>
    </h2>

    <p>
        Have a project in mind or looking for the right digital solution?
        Tell us what you're working on and let's create something meaningful together.
    </p>


    <div class="contact-items">

        <div>
            <span>Email</span>
            <b>gihan@surfux.com</b>
        </div>


        <div>
            <span>Phone</span>
            <b>+94 71 240 3458</b>
        </div>


        <div>
            <span>Social</span>

            <b>
                <a
                    href="https://web.facebook.com/profile.php?id=61585917241863"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Facebook
                </a>

                ·

                <a
                    href="https://www.instagram.com/surf.ux/"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Instagram
                </a>

                ·

                <a
                    href="https://www.linkedin.com/company/surfux/"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    LinkedIn
                </a>
            </b>
        </div>

    </div>

</div>


        <!-- Contact Form -->

        <form
            class="contact-form"
            method="post"
        >


            <?php if ($sent): ?>

                <div class="form-success">
                    Thank you! Your enquiry has been sent successfully.
                    We'll get back to you soon.
                </div>

            <?php endif; ?>


            <?php if ($error): ?>

                <div class="form-error">
                    <?= htmlspecialchars($error) ?>
                </div>

            <?php endif; ?>


            <div class="form-row">

                <label>
                    Your name

                    <input
                        required
                        name="name"
                        placeholder="John Doe"
                        value="<?= htmlspecialchars(
                            $_POST['name'] ?? ''
                        ) ?>"
                    >
                </label>


                <label>
                    Work email

                    <input
                        required
                        type="email"
                        name="email"
                        placeholder="john@company.com"
                        value="<?= htmlspecialchars(
                            $_POST['email'] ?? ''
                        ) ?>"
                    >
                </label>

            </div>


            <label>
                Company

                <input
                    name="company"
                    placeholder="Your company"
                    value="<?= htmlspecialchars(
                        $_POST['company'] ?? ''
                    ) ?>"
                >
            </label>


            <label>
                What can we help with?

                <select name="service">

                    <option value="Software Development">
                        Software Development
                    </option>

                    <option value="Web Development">
                        Web Development
                    </option>

                    <option value="Social Media Marketing">
                        Social Media Marketing
                    </option>

                    <option value="Something else">
                        Something else
                    </option>

                </select>

            </label>


            <label>
                Tell us about the project

                <textarea
                    name="message"
                    rows="6"
                    placeholder="A short overview of your goals, timeline or requirements..."
                ><?= htmlspecialchars(
                    $_POST['message'] ?? ''
                ) ?></textarea>

            </label>


            <button
                class="btn btn-primary"
                type="submit"
            >
                Send enquiry →
            </button>


        </form>

    </div>

</section>

</main>


<?php include __DIR__ . '/../includes/footer.php'; ?>
