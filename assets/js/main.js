const header = document.querySelector('.site-header');
const toggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('.main-nav');

window.addEventListener('scroll',()=>header?.classList.toggle('scrolled', window.scrollY>20));
toggle?.addEventListener('click',()=>nav?.classList.toggle('open'));
document.querySelectorAll('.main-nav a').forEach(a=>a.addEventListener('click',()=>nav?.classList.remove('open')));

const observer = new IntersectionObserver(entries=>{
  entries.forEach(e=>{ if(e.isIntersecting){e.target.classList.add('visible'); observer.unobserve(e.target);} });
},{threshold:.08});
document.querySelectorAll('.reveal').forEach(el=>observer.observe(el));

const dot=document.querySelector('.cursor-dot');
window.addEventListener('mousemove',e=>{
  if(dot){dot.style.transform=`translate(${e.clientX}px,${e.clientY}px)`;}
});
document.querySelectorAll('a,button').forEach(el=>{
  el.addEventListener('mouseenter',()=>dot?.classList.add('hover'));
  el.addEventListener('mouseleave',()=>dot?.classList.remove('hover'));
});
// Client portfolio filters
document.addEventListener('DOMContentLoaded',function(){const f=document.querySelectorAll('.portfolio-filter'),c=document.querySelectorAll('.client-project-card');if(!f.length||!c.length)return;f.forEach(b=>b.addEventListener('click',()=>{f.forEach(x=>x.classList.remove('active'));b.classList.add('active');const s=b.dataset.filter;c.forEach(x=>x.style.display=s==='All'||(x.dataset.groups||'').split('|').includes(s)?'':'none')}));});
