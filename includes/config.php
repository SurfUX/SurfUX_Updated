<?php
$script_dir = str_replace('\\\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
$base_from_request = preg_replace('#/pages$#', '', $script_dir);
define('BASE_URL', $base_from_request === '/' ? '' : rtrim($base_from_request, '/'));
define('SITE_NAME', 'SurfUX');

$projects = [
  [
    'id'=>'nexora-platform','title'=>'Nexora Business Platform','category'=>'Software Development',
    'short'=>'BUSINESS OS','tone'=>'tone-purple',
    'description'=>'A tailored business platform bringing core workflows, reporting and operational tools into one connected experience.',
    'challenge'=>'The business needed a central system to reduce fragmented workflows and make operational information easier to manage.',
    'solution'=>'SurfUX designed and developed a modular web-based platform with role-based access, dashboards, structured workflows and reporting.',
    'technologies'=>['PHP','MySQL','JavaScript','REST API','Responsive UI']
  ],
  [
    'id'=>'coastal-stays','title'=>'Coastal Stays','category'=>'Web Development',
    'short'=>'TRAVEL / WEB','tone'=>'tone-blue',
    'description'=>'A premium travel website experience designed to present properties, destinations and booking journeys with clarity.',
    'challenge'=>'The brand needed a stronger digital presence that could communicate its premium positioning while remaining easy to navigate.',
    'solution'=>'We created a responsive content-led website with visual storytelling, structured accommodation information and conversion-focused journeys.',
    'technologies'=>['PHP','HTML5','CSS3','JavaScript','CMS Integration']
  ],
  [
    'id'=>'luma-social','title'=>'Luma Social Growth','category'=>'Social Media Marketing',
    'short'=>'SOCIAL / GROWTH','tone'=>'tone-orange',
    'description'=>'A social media management program focused on consistent creative, audience engagement and stronger brand visibility.',
    'challenge'=>'The brand had quality products but lacked a consistent social content system and recognizable visual rhythm.',
    'solution'=>'SurfUX developed a content direction, campaign calendar, creative system and ongoing Instagram/Facebook management.',
    'technologies'=>['Content Strategy','Creative Direction','Instagram','Facebook','Analytics']
  ],
  [
    'id'=>'alora-commerce','title'=>'Alora Commerce Suite','category'=>'Software Development',
    'short'=>'COMMERCE','tone'=>'tone-green',
    'description'=>'A digital commerce solution built to simplify product, order and customer operations.',
    'challenge'=>'Manual processes were slowing down daily commerce operations and making information difficult to track.',
    'solution'=>'A centralized system was developed to organize products, orders, customers and operational reporting.',
    'technologies'=>['PHP','MySQL','JavaScript','API Integration','Admin Dashboard']
  ],
  [
    'id'=>'studio-nova','title'=>'Studio Nova','category'=>'Web Development',
    'short'=>'CREATIVE WEB','tone'=>'tone-pink',
    'description'=>'A bold, image-led website for a creative brand, balancing expressive visuals with straightforward navigation.',
    'challenge'=>'The existing online presence did not reflect the personality or quality of the brand.',
    'solution'=>'SurfUX shaped a visual-first interface with flexible content sections, mobile-first layouts and clear enquiry paths.',
    'technologies'=>['PHP','JavaScript','CSS','UI/UX','Performance Optimization']
  ],
  [
    'id'=>'vertex-social','title'=>'Vertex Brand Social','category'=>'Social Media Marketing',
    'short'=>'BRAND / SOCIAL','tone'=>'tone-cyan',
    'description'=>'Ongoing social media creative and management built around consistent storytelling and audience interaction.',
    'challenge'=>'The brand needed a reliable content engine and stronger consistency across its social channels.',
    'solution'=>'We introduced monthly planning, creative templates, campaign concepts and platform-specific content management.',
    'technologies'=>['Social Strategy','Content Creation','Instagram','Facebook','Reporting']
  ],
];

function all_projects(){ global $projects; return $projects; }
function featured_projects(){ global $projects; return array_slice($projects, 0, 3); }
function find_project($id){ foreach(all_projects() as $p){ if($p['id']===$id) return $p; } return null; }
?>