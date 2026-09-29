<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Perumnas Business Solution — Katalog Penawaran Lahan</title>
<style>
:root{
  --navy:#0B2540; --navy-2:#123A5E; --ink:#0F172A; --muted:#5B6B7F;
  --line:#E3E9F0; --bg:#F6F8FB; --white:#fff;
  --teal:#0E9F8E; --teal-dk:#0A7A6D; --amber:#D98A0B; --red:#D14343;
  --green:#1E9E5A; --violet:#6B4EE6;
  --r:14px; --r-sm:9px; --sh:0 1px 2px rgba(11,37,64,.06),0 8px 24px rgba(11,37,64,.06);
  --sh-lg:0 24px 60px rgba(11,37,64,.18);
  --f:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;
}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:var(--f);background:var(--bg);color:var(--ink);-webkit-font-smoothing:antialiased;line-height:1.5}
button{font-family:inherit;cursor:pointer;border:none;background:none;color:inherit}
input,select,textarea{font-family:inherit;font-size:14px}
a{color:inherit}
.wrap{max-width:1280px;margin:0 auto;padding:0 24px}

.nav{position:sticky;top:0;z-index:60;background:rgba(255,255,255,.93);backdrop-filter:blur(14px);border-bottom:1px solid var(--line)}
.nav-in{max-width:1280px;margin:0 auto;padding:0 24px;height:66px;display:flex;align-items:center;gap:28px}
.logo{display:flex;align-items:center;gap:10px;font-weight:750;font-size:16.5px;letter-spacing:-.3px}
.logo-m{width:32px;height:32px;border-radius:8px;background:linear-gradient(135deg,var(--navy),var(--teal));display:grid;place-items:center;color:#fff;font-size:10.5px;font-weight:800;letter-spacing:-.3px}
.nav-links{display:flex;gap:4px;margin-left:8px}
.nav-links a{padding:8px 13px;border-radius:8px;font-size:13.5px;font-weight:550;color:var(--muted);text-decoration:none;transition:.15s}
.nav-links a:hover{background:var(--bg);color:var(--ink)}
.nav-r{margin-left:auto;display:flex;align-items:center;gap:10px}
.btn{padding:9px 17px;border-radius:9px;font-size:13.5px;font-weight:650;transition:.15s;display:inline-flex;align-items:center;gap:7px;white-space:nowrap;text-decoration:none}
.btn-p{background:var(--navy);color:#fff}.btn-p:hover{background:var(--navy-2)}
.btn-t{background:var(--teal);color:#fff}.btn-t:hover{background:var(--teal-dk)}
.btn-g{background:var(--white);color:var(--ink);border:1px solid var(--line)}.btn-g:hover{border-color:#C3CEDB;background:#FBFCFE}
.btn-sm{padding:7px 13px;font-size:12.5px;border-radius:8px}
.cmp-pill{background:var(--violet);color:#fff;padding:7px 13px;border-radius:20px;font-size:12.5px;font-weight:650;display:none;align-items:center;gap:7px}
.cmp-pill.on{display:inline-flex}

.hero{background:linear-gradient(160deg,var(--navy) 0%,#0E3252 55%,#0B4A54 100%);color:#fff;padding:34px 0 40px;position:relative;overflow:hidden}
.hero::after{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 84% 20%,rgba(14,159,142,.3),transparent 46%);pointer-events:none}
.hero-in{position:relative;z-index:2}
.eyebrow{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.2);padding:6px 13px;border-radius:20px;font-size:12px;font-weight:650;letter-spacing:.3px;text-transform:uppercase}
h1{font-size:46px;line-height:1.1;letter-spacing:-1.4px;font-weight:780;margin:20px 0 14px;max-width:840px}
h1 em{font-style:normal;background:linear-gradient(90deg,#4FD8C4,#8AE6D8);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent}
.hero p{font-size:16.5px;color:rgba(255,255,255,.8);max-width:660px;margin-bottom:26px}
.hero-cta{display:flex;gap:11px;flex-wrap:wrap}

section{padding:52px 0}
.sec-h{display:flex;align-items:flex-end;justify-content:space-between;gap:20px;margin-bottom:26px;flex-wrap:wrap}
h2{font-size:28px;letter-spacing:-.8px;font-weight:750}
.sec-h p{color:var(--muted);font-size:14.5px;margin-top:6px;max-width:660px}
.kicker{font-size:11px;font-weight:750;letter-spacing:1px;text-transform:uppercase;color:var(--teal);margin-bottom:7px}

.adv-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(282px,1fr));gap:16px}
.adv{background:var(--white);border:1px solid var(--line);border-radius:var(--r);padding:22px;box-shadow:var(--sh);position:relative;overflow:hidden;transition:.2s}
.adv:hover{transform:translateY(-2px);box-shadow:var(--sh-lg)}
.adv::before{content:'';position:absolute;left:0;top:0;bottom:0;width:3px;background:var(--teal)}
.adv-ic{width:38px;height:38px;border-radius:10px;background:#E8F6F4;display:grid;place-items:center;font-size:17px;margin-bottom:13px;font-weight:800;color:var(--teal-dk)}
.adv h4{font-size:15.5px;font-weight:730;margin-bottom:7px;letter-spacing:-.25px;line-height:1.3}
.adv p{font-size:13.2px;color:var(--muted);line-height:1.6}
.adv .why{margin-top:11px;padding-top:11px;border-top:1px dashed var(--line);font-size:12px;color:var(--teal-dk);font-weight:650}

.filters{background:var(--white);border:1px solid var(--line);border-radius:var(--r);padding:18px;box-shadow:var(--sh);margin-bottom:22px;position:sticky;top:74px;z-index:40}
.f-row{display:flex;gap:10px;flex-wrap:wrap;align-items:center}
.search{flex:1 1 240px;position:relative;min-width:200px}
.search input{width:100%;padding:10px 13px 10px 36px;border:1px solid var(--line);border-radius:9px;background:var(--bg);outline:none}
.search input:focus{border-color:var(--teal);background:#fff}
.search span{position:absolute;left:12px;top:50%;transform:translateY(-50%);opacity:.45;font-size:14px}
select{padding:10px 12px;border:1px solid var(--line);border-radius:9px;background:var(--white);outline:none;cursor:pointer;font-weight:550;color:var(--ink)}
select:focus{border-color:var(--teal)}
.chips{display:flex;gap:7px;flex-wrap:wrap;margin-top:13px;padding-top:13px;border-top:1px solid var(--line);align-items:center}
.chip{padding:6px 12px;border-radius:18px;font-size:12.5px;font-weight:600;border:1px solid var(--line);background:var(--white);color:var(--muted);transition:.15s}
.chip:hover{border-color:#C3CEDB}
.chip.on{background:var(--navy);color:#fff;border-color:var(--navy)}
.f-meta{margin-left:auto;font-size:12.5px;color:var(--muted);font-weight:600}

.plan-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(156px,1fr));gap:12px;margin-bottom:22px}
.pl{border:1px solid var(--line);border-radius:var(--r);background:var(--white);overflow:hidden;cursor:pointer;transition:.2s;box-shadow:var(--sh);text-align:left;padding:0;display:block;width:100%}
.pl:hover{transform:translateY(-3px);box-shadow:var(--sh-lg);border-color:#C9D6E4}
.pl.on{border-color:var(--teal);box-shadow:0 0 0 1.5px var(--teal),var(--sh-lg)}
.pl-ic{height:62px;display:grid;place-items:center;font-size:26px;color:var(--teal-dk);background:#F2F8F7;border-bottom:1px solid var(--line);transition:.2s}
.pl-ic.all{background:linear-gradient(135deg,#0B2540,#0E9F8E);color:#fff}
.pl.on .pl-ic{background:var(--teal);color:#fff}
.pl-b{padding:11px 12px}
.pl-t{font-size:12.5px;font-weight:720;line-height:1.3;letter-spacing:-.2px}
.pl-s{font-size:10.5px;color:var(--muted);margin-top:3px;font-weight:600}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(304px,1fr));gap:18px}
.card{background:var(--white);border:1px solid var(--line);border-radius:var(--r);overflow:hidden;box-shadow:var(--sh);transition:.2s;cursor:pointer;display:flex;flex-direction:column}
.card:hover{transform:translateY(-3px);box-shadow:var(--sh-lg);border-color:#C9D6E4}
.ph{height:162px;position:relative;overflow:hidden;background:#DDE6EF}
.ph svg{width:100%;height:100%;display:block}
.ph-tags{position:absolute;top:11px;left:11px;right:11px;display:flex;gap:6px;flex-wrap:wrap;align-items:flex-start}
.tag{padding:4px 9px;border-radius:6px;font-size:10.5px;font-weight:750;letter-spacing:.3px;backdrop-filter:blur(6px)}
.t-prod{background:rgba(11,37,64,.9);color:#fff}
.t-dummy{margin-left:auto;background:rgba(15,23,42,.6);color:#fff;font-weight:600}
.ph-cmp{position:absolute;bottom:10px;right:10px;width:30px;height:30px;border-radius:8px;background:rgba(255,255,255,.94);display:grid;place-items:center;font-size:15px;font-weight:700;color:var(--muted);box-shadow:0 2px 8px rgba(0,0,0,.16)}
.ph-cmp.on{background:var(--violet);color:#fff}
.cb{padding:16px;display:flex;flex-direction:column;flex:1}
.c-loc{font-size:11px;color:var(--muted);font-weight:650;text-transform:uppercase;letter-spacing:.5px;display:flex;align-items:center;gap:5px;margin-bottom:5px}
.cb h3{font-size:16.5px;font-weight:720;letter-spacing:-.35px;margin-bottom:6px;line-height:1.28}
.c-addr{font-size:12px;color:var(--muted);line-height:1.45;margin-bottom:12px;display:flex;gap:5px;align-items:flex-start}
.c-facts{display:grid;grid-template-columns:1fr 1fr;gap:9px;padding:12px 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line);margin-bottom:12px}
.fact-l{font-size:10px;color:var(--muted);text-transform:uppercase;letter-spacing:.5px;font-weight:650}
.fact-v{font-size:14.5px;font-weight:720;letter-spacing:-.3px;margin-top:1px}
.c-foot{display:flex;align-items:center;gap:8px;margin-top:auto}
.mini{font-size:11.5px;color:var(--muted);font-weight:600;display:flex;align-items:center;gap:4px}
.c-foot .go{margin-left:auto;font-size:12.5px;font-weight:700;color:var(--teal-dk);display:flex;align-items:center;gap:4px}
.empty{grid-column:1/-1;text-align:center;padding:64px 20px;color:var(--muted)}
.empty .e-ic{font-size:38px;opacity:.3;margin-bottom:12px}

.ov{position:fixed;inset:0;background:rgba(11,37,64,.5);backdrop-filter:blur(3px);z-index:90;opacity:0;pointer-events:none;transition:.25s}
.ov.on{opacity:1;pointer-events:auto}
.dr{position:fixed;top:0;right:0;bottom:0;width:min(920px,100vw);background:var(--bg);z-index:100;transform:translateX(102%);transition:transform .3s cubic-bezier(.32,.72,0,1);display:flex;flex-direction:column;box-shadow:-20px 0 60px rgba(11,37,64,.24)}
.dr.on{transform:none}
.dr-hd{background:var(--white);border-bottom:1px solid var(--line);padding:15px 22px;display:flex;align-items:center;gap:14px;flex-shrink:0}
.dr-hd h3{font-size:17px;font-weight:730;letter-spacing:-.4px}
.dr-hd .sub{font-size:12px;color:var(--muted);font-weight:600;margin-top:2px}
.x{width:34px;height:34px;border-radius:9px;background:var(--bg);display:grid;place-items:center;font-size:17px;color:var(--muted);flex-shrink:0}
.x:hover{background:#E9EEF4;color:var(--ink)}
.tabs{background:var(--white);border-bottom:1px solid var(--line);padding:0 22px;display:flex;gap:2px;overflow-x:auto;flex-shrink:0}
.tab{padding:12px 14px;font-size:13px;font-weight:650;color:var(--muted);border-bottom:2.5px solid transparent;white-space:nowrap;transition:.15s}
.tab:hover{color:var(--ink)}
.tab.on{color:var(--navy);border-bottom-color:var(--teal)}
.tab .cnt{background:var(--bg);padding:1px 6px;border-radius:9px;font-size:10.5px;margin-left:5px;font-weight:750}
.tab.on .cnt{background:#E8F6F4;color:var(--teal-dk)}
.dr-bd{flex:1;overflow-y:auto;padding:22px}
.pane{display:none}.pane.on{display:block}

.hero-img{height:214px;border-radius:var(--r);overflow:hidden;margin-bottom:8px;background:#DDE6EF;position:relative;cursor:zoom-in}
.hero-img svg{width:100%;height:100%;display:block}
.hero-img .ph-zoom{position:absolute;bottom:10px;right:10px;background:rgba(11,37,64,.78);color:#fff;font-size:11px;font-weight:650;padding:6px 11px;border-radius:20px;backdrop-filter:blur(4px);pointer-events:none;transition:.15s;opacity:.92}
.hero-img:hover .ph-zoom{opacity:1;background:rgba(11,37,64,.92)}
.thumbs{display:grid;grid-template-columns:repeat(4,1fr);gap:8px;margin-bottom:16px}
.thumbs div{height:62px;border-radius:var(--r-sm);overflow:hidden;background:#DDE6EF;position:relative;cursor:zoom-in}
.thumbs svg{width:100%;height:100%;display:block}
.thumbs span{position:absolute;bottom:3px;left:5px;font-size:9px;color:#fff;font-weight:700;text-shadow:0 1px 3px rgba(0,0,0,.6)}

/* ---- Lightbox: pratinjau foto full-width, bisa di-zoom ---- */
.lightbox{position:fixed;inset:0;background:rgba(6,13,22,.94);z-index:300;display:flex;align-items:center;justify-content:center;flex-direction:column;padding:min(48px,4vw);opacity:0;pointer-events:none;transition:.2s}
.lightbox.on{opacity:1;pointer-events:auto}
.lb-stage{max-width:min(1100px,92vw);max-height:78vh;width:100%;display:flex;align-items:center;justify-content:center;overflow:auto;border-radius:10px}
.lb-stage img,.lb-stage svg{max-width:100%;max-height:78vh;display:block;border-radius:10px;box-shadow:0 24px 70px rgba(0,0,0,.5);cursor:zoom-in;user-select:none;flex-shrink:0}
.lb-stage.zoomed{align-items:flex-start;justify-content:flex-start;cursor:grab}
.lb-stage.zoomed img,.lb-stage.zoomed svg{max-width:none;max-height:none;width:210%;cursor:zoom-out}
.lb-cap{color:rgba(255,255,255,.88);font-size:13px;font-weight:650;margin-top:16px;text-align:center}
.lb-hint{color:rgba(255,255,255,.48);font-size:11px;margin-top:5px;text-align:center}
.lb-close,.lb-nav{position:absolute;width:42px;height:42px;border-radius:10px;background:rgba(255,255,255,.1);color:#fff;display:grid;place-items:center;font-size:19px;transition:.15s}
.lb-close:hover,.lb-nav:hover{background:rgba(255,255,255,.22)}
.lb-close{top:18px;right:20px}
.lb-nav.prev{left:18px;top:50%;transform:translateY(-50%)}
.lb-nav.next{right:18px;top:50%;transform:translateY(-50%)}
@media(max-width:680px){.lb-nav{display:none}}
.note{background:#FDF3E0;border:1px solid #F2DFB8;color:#8A5A05;padding:10px 13px;border-radius:var(--r-sm);font-size:12px;font-weight:600;margin-bottom:18px;display:flex;gap:8px;align-items:flex-start;line-height:1.55}
.note.b{background:#EEF3FB;border-color:#D3E0F2;color:#2C4A73}

.box{background:var(--white);border:1px solid var(--line);border-radius:var(--r);padding:19px;margin-bottom:16px;box-shadow:var(--sh)}
.box-h{display:flex;align-items:center;gap:9px;margin-bottom:14px}
.box-h h4{font-size:14.5px;font-weight:720;letter-spacing:-.2px}
.box-ic{width:28px;height:28px;border-radius:8px;background:#E8F6F4;display:grid;place-items:center;font-size:13px;flex-shrink:0}
.dl{display:grid;grid-template-columns:repeat(auto-fit,minmax(132px,1fr));gap:14px}
.dl dt{font-size:10.5px;color:var(--muted);text-transform:uppercase;letter-spacing:.5px;font-weight:650;margin-bottom:3px}
.dl dd{font-size:15.5px;font-weight:720;letter-spacing:-.3px}
.dl dd small{display:block;font-size:11px;color:var(--muted);font-weight:550;letter-spacing:0;margin-top:2px}
.prose{font-size:13.5px;color:#33455C;line-height:1.65}
.prose strong{color:var(--ink)}

.map-wrap{display:grid;grid-template-columns:1.42fr 1fr;border:1px solid var(--line);border-radius:var(--r);overflow:hidden;background:var(--white);box-shadow:var(--sh);margin-bottom:16px}
.map-c{position:relative;background:#EDF0E9;min-height:412px}
.map-c svg{width:100%;height:100%;display:block}
.map-badge{position:absolute;top:11px;left:11px;background:rgba(255,255,255,.95);padding:6px 11px;border-radius:7px;font-size:11px;font-weight:700;color:var(--navy);box-shadow:0 2px 8px rgba(0,0,0,.12)}
.map-legend{position:absolute;bottom:11px;left:11px;background:rgba(255,255,255,.95);padding:9px 11px;border-radius:8px;font-size:10.5px;box-shadow:0 2px 8px rgba(0,0,0,.12);line-height:1.75}
.map-legend i{display:inline-block;width:11px;height:11px;border-radius:3px;vertical-align:-1px;margin-right:5px}
.map-open{position:absolute;top:11px;right:11px}
.poi-c{border-left:1px solid var(--line);display:flex;flex-direction:column;max-height:412px}
.poi-hd{padding:15px 16px 0}
.poi-hd h4{font-size:14px;font-weight:730;letter-spacing:-.2px}
.poi-hd p{font-size:11.5px;color:var(--muted);margin-top:3px}
.poi-tabs{display:flex;gap:5px;padding:12px 16px;overflow-x:auto;border-bottom:1px solid var(--line)}
.poi-tabs button{padding:5px 11px;border-radius:16px;font-size:11.5px;font-weight:650;border:1px solid var(--line);background:var(--white);color:var(--muted);white-space:nowrap}
.poi-tabs button.on{background:var(--teal);border-color:var(--teal);color:#fff}
.poi-list{flex:1;overflow-y:auto;padding:6px 0}
.poi{display:flex;gap:11px;padding:11px 16px;border-bottom:1px solid #F0F3F7;align-items:flex-start}
.poi:last-child{border-bottom:none}
.poi-pin{width:22px;height:22px;border-radius:50%;display:grid;place-items:center;font-size:10.5px;font-weight:800;color:#fff;flex-shrink:0;margin-top:1px}
.poi-b{min-width:0;flex:1}
.poi-n{font-size:12.8px;font-weight:680;line-height:1.35}
.poi-m{font-size:11px;color:var(--muted);margin-top:2px;line-height:1.45}
.poi-d{text-align:right;flex-shrink:0}
.poi-km{display:block;font-size:11.5px;font-weight:750;color:var(--teal-dk);white-space:nowrap}
.poi-mn{display:block;font-size:10px;color:var(--muted);font-weight:600;margin-top:2px;white-space:nowrap}
.poi-prox{font-size:9.5px;font-weight:750;padding:2px 7px;border-radius:5px;background:#E8F6F4;color:var(--teal-dk);white-space:nowrap;flex-shrink:0;margin-top:2px}
.poi-prox.b{background:#EEF3FB;color:#2C4A73}
.addr-bar{background:var(--white);border:1px solid var(--line);border-radius:var(--r);padding:15px 17px;display:flex;gap:13px;align-items:center;box-shadow:var(--sh);margin-bottom:16px;flex-wrap:wrap}
.addr-bar .ai{width:30px;height:30px;border-radius:8px;background:#E8F6F4;display:grid;place-items:center;font-size:14px;flex-shrink:0}

.rec{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:14px}
.rec-c{border:1.5px solid var(--line);border-radius:var(--r-sm);padding:14px}
.rec-c.pri{border-color:var(--teal);background:#F4FBFA}
.rec-lbl{font-size:10px;font-weight:750;text-transform:uppercase;letter-spacing:.7px;color:var(--muted);margin-bottom:6px}
.rec-c.pri .rec-lbl{color:var(--teal-dk)}
.rec-n{font-size:15px;font-weight:730;letter-spacing:-.3px;line-height:1.3}
.cust{display:flex;flex-wrap:wrap;gap:7px;margin-top:10px}
.cust span{background:var(--bg);border:1px solid var(--line);padding:6px 11px;border-radius:18px;font-size:12px;font-weight:600;color:#33455C}

.vis-sw{display:flex;gap:7px;flex-wrap:wrap;margin-bottom:16px}
.vis-sw button{padding:8px 14px;border-radius:9px;font-size:12.5px;font-weight:650;border:1px solid var(--line);background:var(--white);color:var(--muted)}
.vis-sw button.on{background:var(--violet);border-color:var(--violet);color:#fff}
.sliders{display:grid;gap:16px;margin-bottom:18px}
.sl-h{display:flex;justify-content:space-between;font-size:12.5px;font-weight:650;margin-bottom:7px}
.sl-h b{color:var(--violet);font-weight:750}
.sl-sub{font-size:11px;color:var(--muted);font-weight:550;margin-top:-3px;margin-bottom:6px}
input[type=range]{width:100%;height:5px;-webkit-appearance:none;background:var(--line);border-radius:4px;outline:none}
input[type=range]::-webkit-slider-thumb{-webkit-appearance:none;width:19px;height:19px;border-radius:50%;background:var(--violet);cursor:pointer;box-shadow:0 2px 7px rgba(107,78,230,.42);border:2.5px solid #fff}
input[type=range]::-moz-range-thumb{width:19px;height:19px;border-radius:50%;background:var(--violet);cursor:pointer;border:2.5px solid #fff}
.vis-out{display:grid;grid-template-columns:repeat(auto-fit,minmax(126px,1fr));gap:1px;background:var(--line);border-radius:var(--r-sm);overflow:hidden;margin-bottom:14px}
.vo{background:#FAFBFD;padding:15px 14px}
.vo-l{font-size:10px;text-transform:uppercase;letter-spacing:.5px;color:var(--muted);font-weight:700;margin-bottom:5px}
.vo-v{font-size:20px;font-weight:760;letter-spacing:-.7px;line-height:1.1}
.vo-s{font-size:10.5px;color:var(--muted);margin-top:3px;font-weight:550}
.vo.hl{background:#F4F1FE}.vo.hl .vo-v{color:var(--violet)}
.wf{margin:16px 0}
.wf-row{display:flex;align-items:center;gap:11px;margin-bottom:8px;font-size:12.5px}
.wf-row .nm{width:120px;flex-shrink:0;color:var(--muted);font-weight:600}
.wf-bar{flex:1;height:24px;background:var(--bg);border-radius:5px;overflow:hidden}
.wf-bar i{display:block;height:100%;border-radius:5px;transition:width .3s}
.wf-row .amt{width:96px;text-align:right;font-weight:720;flex-shrink:0;font-variant-numeric:tabular-nums}
.verdict{padding:13px 15px;border-radius:var(--r-sm);font-size:13.5px;font-weight:600;line-height:1.55;display:flex;gap:10px;align-items:flex-start}
.v-ok{background:#E4F5EB;color:#0E5D34}.v-warn{background:#FDF3E0;color:#7A4F04}
.v-bad{background:#FBEAEA;color:#8A2424}
.tl{display:flex;margin-top:6px}
.tl-s{flex:1;position:relative;padding-top:26px;text-align:center}
.tl-s::before{content:'';position:absolute;top:9px;left:0;right:0;height:2.5px;background:var(--line)}
.tl-s:first-child::before{left:50%}.tl-s:last-child::before{right:50%}
.tl-s::after{content:'';position:absolute;top:4px;left:50%;transform:translateX(-50%);width:13px;height:13px;border-radius:50%;background:var(--white);border:2.5px solid var(--violet)}
.tl-s.done::after{background:var(--violet)}
.tl-t{font-size:11px;font-weight:700;line-height:1.3}
.tl-d{font-size:10px;color:var(--muted);margin-top:2px}


.cmp-tbl{width:100%;border-collapse:collapse;background:var(--white);border-radius:var(--r);overflow:hidden;box-shadow:var(--sh);font-size:13px}
.cmp-tbl th,.cmp-tbl td{padding:12px 14px;text-align:left;border-bottom:1px solid var(--line);vertical-align:top}
.cmp-tbl th{background:var(--navy);color:#fff;font-size:11.5px;text-transform:uppercase;letter-spacing:.5px;font-weight:700}
.cmp-tbl td:first-child{font-weight:680;color:var(--muted);font-size:11.5px;text-transform:uppercase;letter-spacing:.4px;width:168px;background:#FAFBFD}
.cmp-tbl tr:last-child td{border-bottom:none}

.cta{background:linear-gradient(140deg,var(--navy),#0B4A54);border-radius:var(--r);padding:26px;color:#fff}
.cta h4{font-size:19px;font-weight:740;letter-spacing:-.4px;margin-bottom:7px}
.cta p{font-size:13.5px;color:rgba(255,255,255,.75);margin-bottom:17px;max-width:520px}
.cta-b{display:flex;gap:10px;flex-wrap:wrap}
.cta .btn-g{background:rgba(255,255,255,.13);border-color:rgba(255,255,255,.26);color:#fff}
.cta .btn-g:hover{background:rgba(255,255,255,.2)}

.toast{position:fixed;bottom:26px;left:50%;transform:translate(-50%,80px);background:var(--ink);color:#fff;padding:13px 21px;border-radius:11px;font-size:13.5px;font-weight:600;z-index:200;opacity:0;transition:.28s;box-shadow:0 14px 40px rgba(0,0,0,.3);display:flex;gap:9px;align-items:center}
.toast.on{transform:translate(-50%,0);opacity:1}

footer{background:var(--navy);color:rgba(255,255,255,.62);padding:34px 0;font-size:12.5px;line-height:1.7}
footer strong{color:#fff}
footer .fdis{border-top:1px solid rgba(255,255,255,.13);margin-top:18px;padding-top:16px;font-size:11.5px;color:rgba(255,255,255,.5)}

.porsi.utuh{background:#F4FBFA;border-color:#BFE5DE}
.porsi.utuh .porsi-t{color:var(--teal-dk)}
.porsi{background:#F7F9FC;border:1px solid var(--line);border-radius:var(--r-sm);padding:16px;margin-bottom:16px}
.porsi-h{display:flex;align-items:flex-start;justify-content:space-between;gap:14px;margin-bottom:11px;flex-wrap:wrap}
.porsi-t{font-size:13px;font-weight:720}
.porsi-s{font-size:11.5px;color:var(--muted);margin-top:2px}
.porsi-v{font-size:19px;font-weight:770;letter-spacing:-.5px;color:var(--teal-dk);text-align:right}
.porsi-v small{display:block;font-size:10.5px;color:var(--muted);font-weight:600;letter-spacing:0;margin-top:2px}
.porsi input[type=range]::-webkit-slider-thumb{background:var(--teal);box-shadow:0 2px 7px rgba(14,159,142,.4)}
.porsi input[type=range]::-moz-range-thumb{background:var(--teal)}
.porsi-note{font-size:11px;color:var(--muted);margin-top:9px;line-height:1.5}
.tahap-tbl{margin-top:12px;border:1px solid var(--line);border-radius:8px;overflow:hidden;background:var(--white)}
.tt-h,.tt-r{display:grid;grid-template-columns:1fr 1fr 1.2fr 1.2fr;gap:8px;padding:9px 12px;font-size:11.5px}
.tt-h{background:var(--navy);color:#fff;font-weight:700;font-size:10.5px;text-transform:uppercase;letter-spacing:.4px}
.tt-r{border-top:1px solid var(--line)}
.tt-r span:first-child{color:var(--teal-dk)}
.pf-seg{background:#F4FBFA;border:1px solid #BFE5DE;border-radius:var(--r-sm);padding:14px 16px;margin-bottom:16px}
.pf-sl{font-size:10px;font-weight:750;letter-spacing:.6px;text-transform:uppercase;color:var(--teal-dk);margin-bottom:5px}
.pf-sv{font-size:17px;font-weight:750;letter-spacing:-.4px;margin-bottom:6px}
.pf-sp{font-size:12.5px;color:#33455C;line-height:1.6}
.pf-h{font-size:10.5px;font-weight:750;letter-spacing:.5px;text-transform:uppercase;color:var(--muted);margin-bottom:8px}
.ek-bar{display:flex;height:26px;border-radius:6px;overflow:hidden;margin-bottom:9px}
.ek-bar i{display:block;height:100%}
.ek-leg{display:flex;flex-wrap:wrap;gap:12px;font-size:11px;color:var(--muted);font-weight:600;margin-bottom:16px}
.ek-leg i{display:inline-block;width:9px;height:9px;border-radius:2px;margin-right:5px;vertical-align:-1px}
.ek-leg b{color:var(--ink);font-weight:750}
.pf-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:1px;background:var(--line);border-radius:var(--r-sm);overflow:hidden;margin-bottom:14px}
.pf-grid>div{background:#FAFCFE;padding:14px}
.pf-l{font-size:10px;text-transform:uppercase;letter-spacing:.5px;color:var(--muted);font-weight:750;margin-bottom:5px;line-height:1.35}
.pf-v{font-size:20px;font-weight:770;letter-spacing:-.6px;line-height:1.1;color:var(--navy)}
.pf-v small{font-size:11px;font-weight:600;letter-spacing:0;color:var(--muted)}
.pf-s{font-size:10.5px;color:var(--muted);margin-top:5px;line-height:1.45}
.cut-badge{background:var(--bg);border:1px solid var(--line);border-radius:20px;padding:8px 16px;font-size:12.5px;color:var(--muted);font-weight:600;white-space:nowrap}
.cut-badge b{color:var(--ink);font-weight:750}
.src-tbl{border:1px solid var(--line);border-radius:var(--r);overflow:hidden;box-shadow:var(--sh)}
.src-h,.src-r{display:grid;grid-template-columns:1.5fr 1fr 1.6fr 1fr;gap:14px;padding:13px 18px;align-items:start}
.src-h{background:var(--navy);color:#fff;font-size:10.5px;font-weight:750;text-transform:uppercase;letter-spacing:.5px}
.src-r{border-top:1px solid var(--line);font-size:12.5px}
.src-r:nth-child(even){background:#FAFBFD}
.src-n{font-weight:700;color:var(--ink);line-height:1.4}
.src-k{font-size:11px;color:var(--muted);margin-top:4px;line-height:1.5}
.src-c{font-weight:680;color:var(--ink)}
.src-cv{font-size:11px;color:var(--muted);margin-top:3px}
.src-s{color:#33455C;line-height:1.5;font-size:11.5px}
.src-st{display:inline-flex;align-items:center;gap:6px;font-size:11px;font-weight:750;white-space:nowrap}
.src-st i{width:8px;height:8px;border-radius:50%;display:inline-block;flex-shrink:0}
@media(max-width:920px){.src-h{display:none}.src-r{grid-template-columns:1fr;gap:6px}}
.src-wrap{margin-left:auto;display:flex;gap:5px;flex-wrap:wrap}
.src-b{display:inline-flex;align-items:center;gap:5px;border:1px solid;border-radius:14px;padding:3px 9px;font-size:9.5px;font-weight:700;white-space:nowrap;background:var(--white)}
.src-b i{width:6px;height:6px;border-radius:50%;display:inline-block}
.kw-warn{background:#FDF3E0;border:1px solid #F2DFB8;color:#8A5A05;border-radius:8px;padding:12px 14px;font-size:12.2px;line-height:1.6;display:flex;gap:9px;align-items:flex-start;margin-bottom:14px}
.kw-b.est{background:repeating-linear-gradient(90deg,var(--line) 0 6px,transparent 6px 10px)}
.kw-v{width:56px;text-align:right;font-size:10.5px;color:#9AA8B8;font-weight:650;flex-shrink:0}
.kw-list{display:grid;gap:9px;margin-bottom:14px}
.kw-r{display:flex;align-items:center;gap:12px}
.kw-t{width:212px;flex-shrink:0;font-size:12.5px;font-weight:620;color:#33455C}
.kw-b{flex:1;height:9px;border-radius:5px;background:var(--line);overflow:hidden}
.kw-b i{display:block;height:100%;border-radius:5px;transition:width .4s}
@media(max-width:920px){.kw-v{display:none}}
.kw-l{width:82px;text-align:right;font-size:10.5px;font-weight:750;text-transform:capitalize;flex-shrink:0}
.kw-ins{background:#F4FBFA;border:1px solid #BFE5DE;border-radius:8px;padding:12px 14px;font-size:12.5px;color:#0E5D34;line-height:1.6;display:flex;gap:9px;align-items:flex-start}
.kw-op{display:flex;flex-wrap:wrap;gap:7px}
.kw-op span{background:var(--bg);border:1px solid var(--line);padding:7px 12px;border-radius:18px;font-size:12px;font-weight:650;color:#33455C}
@media(max-width:920px){.kw-t{width:130px;font-size:11.5px}.kw-l{width:62px}}
.db-row{display:flex;align-items:center;gap:12px;margin-bottom:6px}
.db-bar{flex:1;height:12px;border-radius:7px;background:var(--line);overflow:hidden}
.db-bar i{display:block;height:100%;border-radius:7px;transition:width .4s}
.db-lbl{font-size:13.5px;font-weight:760;white-space:nowrap;letter-spacing:-.2px}
.db-note{font-size:11.5px;color:var(--muted);margin-bottom:16px;line-height:1.5}
.pf-dev{background:var(--bg);border-left:3px solid var(--teal);border-radius:0 8px 8px 0;padding:13px 15px;margin-bottom:13px}
.pf-dl{font-size:11.5px;font-weight:750;color:var(--teal-dk);margin-bottom:5px}
.pf-dp{font-size:12.5px;color:#33455C;line-height:1.6}
.pf-note2{font-size:12px;color:#33455C;line-height:1.6;background:#F4FBFA;border-radius:8px;padding:12px 14px}
.pf-src{font-size:10px;color:var(--muted);margin-top:12px;line-height:1.55}
.pas-top{display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:1px;background:var(--line);border-radius:var(--r-sm);overflow:hidden;margin-bottom:14px}
.pas-c{background:#FAFCFE;padding:15px 14px}
.pas-l{font-size:10px;text-transform:uppercase;letter-spacing:.5px;color:var(--muted);font-weight:750;margin-bottom:6px}
.pas-v{font-size:24px;font-weight:770;letter-spacing:-.8px;line-height:1.1;color:var(--navy)}
.pas-v small{font-size:11.5px;font-weight:600;letter-spacing:0;color:var(--muted)}
.pas-s{font-size:10.5px;color:var(--muted);margin-top:5px;line-height:1.45}
.pas-bar{height:6px;border-radius:4px;background:var(--line);overflow:hidden;margin-top:7px}
.pas-bar i{display:block;height:100%;border-radius:4px;transition:width .4s}
.pas-rows{display:grid;gap:8px;margin-bottom:14px}
.pas-r{display:flex;align-items:center;gap:10px;padding:9px 12px;background:var(--bg);border-radius:8px}
.pas-d{width:9px;height:9px;border-radius:50%;flex-shrink:0}
.pas-rn{font-size:12.5px;font-weight:680}
.pas-rd{font-size:11px;color:var(--muted);margin-top:1px}
.pas-r>div{flex:1;min-width:0}
.pas-rc{font-size:11px;font-weight:700;color:var(--teal-dk);white-space:nowrap}
.pas-arti{background:#F4FBFA;border:1px solid #BFE5DE;border-radius:8px;padding:12px 14px;font-size:12.8px;color:#0E5D34;line-height:1.6;display:flex;gap:9px;align-items:flex-start}
.pas-note{font-size:10.5px;color:var(--muted);margin-top:11px;line-height:1.55}
.kw-wrap{border:1px solid var(--line);border-radius:var(--r);overflow:hidden;background:var(--white);box-shadow:var(--sh);margin-bottom:16px}
.kw-im{height:212px;overflow:hidden;background:#DCEAF4}
.kw-im svg{width:100%;height:100%;display:block}
.kw-cap{padding:13px 16px;border-top:1px solid var(--line)}
.kw-t{font-size:13.5px;font-weight:720;letter-spacing:-.2px}
.kw-s{font-size:11.5px;color:var(--muted);margin-top:3px;line-height:1.5}
/* --- Why PBS interaktif --- */
.why-wrap{display:grid;grid-template-columns:300px 1fr;gap:18px;align-items:start}
.why-nav{display:flex;flex-direction:column;gap:9px}
.wn{display:flex;gap:12px;align-items:flex-start;padding:15px;border:1px solid var(--line);border-radius:var(--r);background:var(--white);cursor:pointer;transition:.18s;text-align:left;box-shadow:var(--sh)}
.wn:hover{border-color:#B9C7D6;transform:translateX(2px)}
.wn.on{border-color:var(--teal);background:#F4FBFA;box-shadow:0 0 0 1px var(--teal),var(--sh)}
.wn-ic{width:34px;height:34px;border-radius:9px;background:var(--bg);display:grid;place-items:center;font-size:16px;flex-shrink:0;transition:.18s}
.wn.on .wn-ic{background:var(--teal);color:#fff}
.wn-t{font-size:14px;font-weight:720;letter-spacing:-.2px;line-height:1.3}
.wn-s{font-size:11.5px;color:var(--muted);margin-top:3px;line-height:1.45}
.why-body{background:var(--white);border:1px solid var(--line);border-radius:var(--r);padding:24px;box-shadow:var(--sh);min-height:352px}
.wb-h{font-size:20px;font-weight:750;letter-spacing:-.5px;margin-bottom:9px}
.wb-p{font-size:14px;color:#33455C;line-height:1.68;margin-bottom:20px}
.wb-vis{background:var(--bg);border-radius:var(--r-sm);padding:18px;margin-bottom:18px}
.cmp2{display:grid;grid-template-columns:1fr auto 1fr;gap:14px;align-items:center}
.cmp2 .side{border-radius:var(--r-sm);padding:15px;background:var(--white);border:1px solid var(--line)}
.cmp2 .side.bad{border-color:#F0D2D2;background:#FDF7F7}
.cmp2 .side.good{border-color:#BFE5DE;background:#F3FBF9}
.cmp2 .lbl{font-size:9.5px;font-weight:800;letter-spacing:.7px;text-transform:uppercase;margin-bottom:9px}
.cmp2 .side.bad .lbl{color:#B54A4A}.cmp2 .side.good .lbl{color:var(--teal-dk)}
.cmp2 .stp{display:flex;gap:8px;align-items:flex-start;font-size:12.2px;margin-bottom:7px;line-height:1.45}
.cmp2 .stp:last-child{margin-bottom:0}
.cmp2 .stp i{font-style:normal;flex-shrink:0;font-weight:800}
.cmp2 .side.bad .stp i{color:#C96A6A}.cmp2 .side.good .stp i{color:var(--teal)}
.cmp2 .arw{font-size:19px;color:var(--muted);font-weight:800}
.wb-kpi{display:grid;grid-template-columns:repeat(auto-fit,minmax(118px,1fr));gap:1px;background:var(--line);border-radius:var(--r-sm);overflow:hidden}
.wb-kpi div{background:var(--white);padding:14px}
.wb-kpi .k{font-size:22px;font-weight:780;letter-spacing:-.7px;color:var(--teal-dk);line-height:1.1}
.wb-kpi .l{font-size:10.5px;color:var(--muted);font-weight:650;margin-top:4px;line-height:1.4}
.valgrid{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.valc{border:1px solid var(--line);border-radius:var(--r-sm);padding:15px;background:var(--white);transition:.18s}
.valc:hover{border-color:var(--teal);box-shadow:var(--sh)}
.valc-ic{width:32px;height:32px;border-radius:9px;background:#E8F6F4;display:grid;place-items:center;font-size:15px;margin-bottom:10px}
.valc-t{font-size:13.5px;font-weight:730;margin-bottom:5px;letter-spacing:-.2px}
.valc-p{font-size:12px;color:var(--muted);line-height:1.55}
#kisah{background:var(--white);border-top:1px solid var(--line)}
.ss-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(304px,1fr));gap:18px}
.ss{border:1px solid var(--line);border-radius:var(--r);overflow:hidden;background:var(--white);box-shadow:var(--sh);display:flex;flex-direction:column;transition:.2s}
.ss:hover{transform:translateY(-3px);box-shadow:var(--sh-lg)}
.ss-im{height:152px;overflow:hidden;background:#DCEAF4;position:relative}
.ss-im svg{width:100%;height:100%;display:block}
.ss-tag{position:absolute;top:10px;left:10px;background:rgba(11,37,64,.9);color:#fff;padding:4px 10px;border-radius:6px;font-size:10.5px;font-weight:750}
.ss-b{padding:17px;display:flex;flex-direction:column;flex:1}
.ss-loc{font-size:10.5px;font-weight:700;letter-spacing:.5px;text-transform:uppercase;color:var(--muted);margin-bottom:5px}
.ss-t{font-size:16px;font-weight:730;letter-spacing:-.3px;line-height:1.3;margin-bottom:9px}
.ss-q{font-size:12.8px;color:#33455C;line-height:1.62;font-style:italic;padding-left:12px;border-left:2.5px solid var(--teal);margin-bottom:13px}
.ss-w{display:flex;align-items:center;gap:10px;margin-bottom:13px}
.ss-av{width:34px;height:34px;border-radius:50%;display:grid;place-items:center;color:#fff;font-size:12px;font-weight:750;flex-shrink:0}
.ss-wn{font-size:12.5px;font-weight:700}.ss-wr{font-size:11px;color:var(--muted)}
.ss-m{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--line);border-radius:var(--r-sm);overflow:hidden;margin-top:auto}
.ss-m div{background:#FAFBFD;padding:11px 9px;text-align:center}
.ss-m .k{font-size:15px;font-weight:770;letter-spacing:-.4px;color:var(--teal-dk);line-height:1.1}
.ss-m .l{font-size:9.5px;color:var(--muted);font-weight:650;margin-top:3px;line-height:1.3}
.ss-note{background:#FDF3E0;border:1px solid #F2DFB8;color:#8A5A05;padding:12px 15px;border-radius:var(--r-sm);font-size:12px;font-weight:600;margin-top:18px;line-height:1.55}
.map-modes{display:flex;gap:6px;flex-wrap:wrap;margin-bottom:11px}
.map-modes button{padding:6px 12px;border-radius:18px;font-size:11.5px;font-weight:650;border:1px solid rgba(255,255,255,.24);background:rgba(255,255,255,.07);color:rgba(255,255,255,.78)}
.map-modes button:hover{background:rgba(255,255,255,.14)}
.map-modes button.on{background:#4FD8C4;border-color:#4FD8C4;color:#083A34}
@media(max-width:920px){.valgrid{grid-template-columns:1fr}}
.bars{display:grid;gap:10px}
.bar-r{display:flex;align-items:center;gap:11px;font-size:12.5px}
.bar-r .bn{width:118px;flex-shrink:0;font-weight:620}
.bar-r .bt{flex:1;height:22px;background:var(--white);border-radius:5px;overflow:hidden;border:1px solid var(--line)}
.bar-r .bt i{display:block;height:100%;background:linear-gradient(90deg,var(--teal),#4FD8C4);transition:width .5s}
.bar-r .bv{width:52px;text-align:right;font-weight:730;font-variant-numeric:tabular-nums}
@media(max-width:920px){.why-wrap{grid-template-columns:1fr}.cmp2{grid-template-columns:1fr}.cmp2 .arw{transform:rotate(90deg);text-align:center}}
/* --- peta sebaran Indonesia --- */
.hero-grid{display:grid;grid-template-columns:1fr 292px;gap:20px;align-items:stretch}
.idmap-c{background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.16);border-radius:var(--r);padding:18px;backdrop-filter:blur(8px)}
.idmap-hd h2{color:#fff;font-weight:740}
.idmap-hd p{font-size:12.5px;color:rgba(255,255,255,.66);margin:5px 0 12px}
.idmap{position:relative}
.idmap svg{width:100%;height:auto;display:block;overflow:visible;border-radius:10px}
.isl{fill:url(#landI);stroke:rgba(255,255,255,.34);stroke-width:1;stroke-linejoin:round;transition:.22s}
.isl.act{fill:url(#landA);stroke:rgba(127,232,214,.72);stroke-width:1.3}
.mk{cursor:pointer;transition:.15s}
.mk circle.h{fill:#4FD8C4;fill-opacity:.2;stroke:#4FD8C4;stroke-width:1.2}
.mk circle.b{fill:#0E9F8E;stroke:#fff;stroke-width:2;filter:drop-shadow(0 2px 4px rgba(4,18,31,.5))}
.mk:hover circle.b{fill:#4FD8C4}
.mk.on circle.b{fill:#FFC94F;stroke:#0B2540}
.mk text{fill:#fff;font-family:var(--f);font-weight:800;pointer-events:none}
.idmap-tip{position:absolute;background:#0B2540;color:#fff;padding:9px 12px;border-radius:8px;font-size:11.5px;pointer-events:none;opacity:0;transition:.15s;box-shadow:0 8px 24px rgba(0,0,0,.35);white-space:nowrap;z-index:5;line-height:1.5}
.idmap-tip.on{opacity:1}
.idmap-legend{display:flex;gap:14px;align-items:center;flex-wrap:wrap;margin-top:12px;font-size:10.5px;color:rgba(255,255,255,.72);font-weight:600}
.idmap-legend i{display:inline-block;border-radius:50%;background:#0E9F8E;border:1.5px solid #fff;vertical-align:-1px;margin-right:5px}
.idmap-legend i.d1{width:8px;height:8px}.idmap-legend i.d2{width:12px;height:12px}.idmap-legend i.d3{width:16px;height:16px}
.idmap-side{background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.16);border-radius:var(--r);padding:16px;backdrop-filter:blur(8px);display:flex;flex-direction:column}
.ims-hd{font-size:10.5px;font-weight:750;letter-spacing:.8px;text-transform:uppercase;color:rgba(255,255,255,.6);margin-bottom:10px}
.ims-list{flex:1;overflow-y:auto;max-height:318px;margin:-4px}
.ims{display:flex;align-items:center;gap:10px;padding:9px 10px;border-radius:9px;cursor:pointer;transition:.15s;margin:4px}
.ims:hover{background:rgba(255,255,255,.1)}
.ims.on{background:rgba(79,216,196,.18);box-shadow:inset 0 0 0 1px rgba(79,216,196,.4)}
.ims-n{flex:1;min-width:0;font-size:13px;font-weight:650;color:#fff}
.ims-s{font-size:10.5px;color:rgba(255,255,255,.58);margin-top:1px;font-weight:550}
.ims-c{font-size:15px;font-weight:780;color:#4FD8C4;letter-spacing:-.4px}
/* --- fitur investor --- */
.save-btn{position:absolute;bottom:10px;right:48px;width:30px;height:30px;border-radius:8px;background:rgba(255,255,255,.94);display:grid;place-items:center;font-size:14px;color:var(--muted);box-shadow:0 2px 8px rgba(0,0,0,.16)}
.save-btn.on{background:#D14343;color:#fff}
.pill-save{background:#D14343;color:#fff;padding:7px 13px;border-radius:20px;font-size:12.5px;font-weight:650;display:none;align-items:center;gap:7px}
.pill-save.on{display:inline-flex}
.doc{display:flex;gap:12px;padding:13px 0;border-bottom:1px solid #F0F3F7;align-items:flex-start}
.doc:last-child{border-bottom:none}
.doc-ic{width:30px;height:30px;border-radius:8px;background:var(--bg);display:grid;place-items:center;font-size:14px;flex-shrink:0}
.doc-b{flex:1;min-width:0}
.doc-n{font-size:13.2px;font-weight:680}
.doc-m{font-size:11.5px;color:var(--muted);margin-top:2px;line-height:1.5}
.doc-s{font-size:10.5px;font-weight:750;padding:4px 10px;border-radius:6px;background:var(--bg);color:var(--muted);white-space:nowrap;border:1px solid var(--line)}
.doc-s.req{background:#E4F5EB;color:#136B3D;border-color:#BFE5CE}
.sim-pay{display:grid;grid-template-columns:repeat(auto-fit,minmax(120px,1fr));gap:1px;background:var(--line);border-radius:var(--r-sm);overflow:hidden;margin:14px 0}
.sim-pay .vo{background:#FAFCFE}
.seg{display:flex;gap:6px;flex-wrap:wrap;margin-bottom:14px}
.seg button{padding:8px 14px;border-radius:9px;font-size:12.5px;font-weight:650;border:1px solid var(--line);background:var(--white);color:var(--muted)}
.seg button.on{background:var(--teal);border-color:var(--teal);color:#fff}
.sim-slider input[type=range]::-webkit-slider-thumb{background:var(--teal);box-shadow:0 2px 7px rgba(14,159,142,.4)}
.sim-slider input[type=range]::-moz-range-thumb{background:var(--teal)}
.sim-slider .sl-h b{color:var(--teal-dk)}
.sim-grid{display:grid;grid-template-columns:1fr 1fr;gap:18px}
.similar{display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:11px}
.sim-c{border:1px solid var(--line);border-radius:var(--r-sm);overflow:hidden;cursor:pointer;background:var(--white);transition:.15s}
.sim-c:hover{border-color:var(--teal);transform:translateY(-2px);box-shadow:var(--sh)}
.sim-c .im{height:74px;background:#DDE6EF;overflow:hidden}
.sim-c .im svg{width:100%;height:100%;display:block}
.sim-c .bd{padding:10px 11px}
.sim-c .t{font-size:12.5px;font-weight:700;line-height:1.3;margin-bottom:3px}
.sim-c .s{font-size:11px;color:var(--muted)}
.md{position:fixed;inset:0;z-index:120;display:none;align-items:center;justify-content:center;padding:20px;background:rgba(11,37,64,.55);backdrop-filter:blur(4px)}
.md.on{display:flex}
.md-in{background:var(--white);border-radius:var(--r);width:min(560px,100%);max-height:88vh;overflow-y:auto;box-shadow:var(--sh-lg)}
.md-hd{padding:18px 20px;border-bottom:1px solid var(--line);display:flex;align-items:center;gap:12px;position:sticky;top:0;background:var(--white);z-index:2}
.md-hd h4{font-size:16px;font-weight:730;letter-spacing:-.3px;flex:1}
.md-bd{padding:20px}
.fld{margin-bottom:15px}
.fld label{display:block;font-size:11.5px;font-weight:700;text-transform:uppercase;letter-spacing:.4px;color:var(--muted);margin-bottom:6px}
.fld input,.fld select,.fld textarea{width:100%;padding:10px 12px;border:1px solid var(--line);border-radius:var(--r-sm);background:var(--bg);outline:none}
.fld input:focus,.fld select:focus,.fld textarea:focus{border-color:var(--teal);background:#fff}
.fld .hint2{font-size:11px;color:var(--muted);margin-top:5px;line-height:1.5}
.row2{display:grid;grid-template-columns:1fr 1fr;gap:12px}
@media print{
  .nav,.hero,#unggul,#katalog,#cara,footer,.ov,.tabs,.dr-hd .btn,.dr-hd .x,.cta,.toast,.md{display:none!important}
  .dr{position:static;transform:none;width:100%;box-shadow:none;background:#fff}
  .pane{display:block!important;page-break-inside:avoid}
  body{background:#fff}
}
@media(max-width:920px){
  h1{font-size:33px}.rec{grid-template-columns:1fr}.nav-links{display:none}
  .map-wrap{grid-template-columns:1fr}.poi-c{border-left:none;border-top:1px solid var(--line);max-height:none}
  .map-c{min-height:280px}
  .hero-grid{grid-template-columns:1fr}
  .ims-list{max-height:210px}
  .sim-grid{grid-template-columns:1fr}
  .row2{grid-template-columns:1fr}
}
</style>
</head>
<body>

<nav class="nav"><div class="nav-in">
  <div class="logo"><div class="logo-m">PBS</div>Perumnas <span style="font-weight:500;color:var(--muted)">Business Solution</span></div>
  <div class="nav-links"><a href="#unggul">Why PBS</a><a href="#katalog">Katalog Lahan</a><a href="#kisah">Success Story</a><a href="#cara">Cara Kerja</a><a href="#sumber">Sumber Data</a></div>
  <div class="nav-r">
    <button class="pill-save" id="savePill" onclick="openSaved()">♥ Tersimpan <span id="saveN">0</span></button>
    <button class="cmp-pill" id="cmpPill" onclick="openCompare()">⇄ Bandingkan <span id="cmpN">0</span></button>
    <button class="btn btn-g btn-sm" onclick="toast('Fitur unduh katalog PDF — tahap berikutnya')">↓ Unduh Katalog</button>
    <button class="btn btn-t btn-sm" onclick="toast('Formulir konsultasi akan terhubung ke CRM')">Konsultasi Gratis</button>
    <a class="btn btn-g btn-sm" href="admin/login.php">Login Admin</a>
  </div>
</div></nav>

<header class="hero"><div class="wrap hero-in">
  <div class="hero-grid">
    <div class="idmap-c">
      <div class="idmap-hd"><h2 style="font-size:20px;letter-spacing:-.5px">Sebaran Lahan Perumnas</h2>
        <p>Klik wilayah untuk melihat lahan yang tersedia di sana.</p></div>
      <div class="idmap" id="idmap"></div>
      <div class="map-modes" id="mapModes"></div>
      <div class="idmap-legend" id="mapLegend"></div>
    </div>
    <aside class="idmap-side">
      <div class="ims-hd">Wilayah</div>
      <div class="ims-list" id="imsList"></div>
      <button class="btn btn-t" style="width:100%;justify-content:center;margin-top:12px" onclick="document.getElementById('katalog').scrollIntoView({behavior:'smooth'})">Jelajahi Semua Lahan →</button>
    </aside>
  </div>
</div></header>

<section id="unggul">
  <div class="wrap">
    <div class="sec-h"><div>
      <div class="kicker">Keunggulan</div>
      <h2>Why Perumnas Business Solution</h2>
    </div></div>
    <div class="why-wrap">
      <div class="why-nav" id="whyNav"></div>
      <div class="why-body" id="whyBody"></div>
    </div>
  </div>
</section>

<section id="katalog" style="padding-top:8px">
  <div class="wrap">
    <div class="sec-h"><div>
      <div class="kicker">Katalog</div>
      <h2>Pilih lahan berdasarkan rencana Anda</h2>
      <p>Saring dulu berdasarkan rencana bisnis dan anggaran — bukan lokasi. Sistem menampilkan lahan yang paling cocok dengan rencana itu.</p>
    </div></div>

    <div class="plan-grid" id="planGrid"></div>
    <div class="filters">
      <div class="f-row">
        <div class="search"><span>⌕</span><input id="q" placeholder="Cari lokasi, kota, alamat, atau tipe produk…" oninput="render()"></div>
        <select id="fPulau" onchange="render()"><option value="">Semua Pulau</option></select>
        <select id="fProd" onchange="buildPlans();render()"><option value="">Semua Rencana Bisnis</option></select>
        <select id="fHarga" onchange="render()">
          <option value="">Semua Anggaran</option>
          <option value="0-5">Di bawah Rp5 M</option>
          <option value="5-50">Rp5 M – Rp50 M</option>
          <option value="50-150">Rp50 M – Rp150 M</option>
          <option value="150-99999">Di atas Rp150 M</option>
        </select>
        <select id="fSort" onchange="render()">
          <option value="luas">Urutkan: Luas Terbesar</option>
          <option value="murah">Harga Terendah</option>
          <option value="mahal">Harga Tertinggi</option>
          <option value="nama">Nama Lokasi (A–Z)</option>
        </select>
      </div>
      <div class="chips">
        <button class="chip on" data-lu="" onclick="setLu(this)">Semua Ukuran</button>
        <button class="chip" data-lu="0-1" onclick="setLu(this)">Di bawah 1 Ha</button>
        <button class="chip" data-lu="1-5" onclick="setLu(this)">1 – 5 Ha</button>
        <button class="chip" data-lu="5-20" onclick="setLu(this)">5 – 20 Ha</button>
        <button class="chip" data-lu="20-9999" onclick="setLu(this)">Di atas 20 Ha</button>
        <span class="f-meta" id="fMeta"></span>
      </div>
    </div>
    <div class="grid" id="grid"></div>
  </div>
</section>

<section id="cara" style="background:var(--white);border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
  <div class="wrap">
    <div class="sec-h"><div>
      <div class="kicker">Cara Kerja</div>
      <h2>3 Langkah Mudah Memulai</h2>
      <p>Tanpa biaya di awal, tanpa kewajiban melanjutkan.</p>
    </div></div>
    <div class="adv-grid">
      <div class="adv"><div class="adv-ic">1</div><h4>Pilih Rencana Bisnis Anda</h4>
        <p>Tentukan mau bangun apa — gudang, perumahan, ruko, atau lainnya. Katalog otomatis menampilkan lahan yang cocok beserta rekomendasi peruntukannya.</p>
        <div class="why">→ Cukup beberapa menit</div></div>
      <div class="adv"><div class="adv-ic">2</div><h4>Hitung Kelayakannya</h4>
        <p>Buka simulator, atur porsi lahan dan asumsi Anda sendiri. Langsung terlihat kapasitas, pendapatan, dan marginnya sebelum bertemu siapa pun.</p>
        <div class="why">→ Tanpa perlu daftar</div></div>
      <div class="adv"><div class="adv-ic">3</div><h4>Hubungi Kami</h4>
        <p>Jadwalkan site visit atau langsung kirim penawaran harga. Tim Marketing Retail menindaklanjuti.</p>
        <div class="why">→ Konsultasi gratis</div></div>
    </div>
  </div>
</section>

<section id="kisah">
  <div class="wrap">
    <div class="sec-h"><div>
      <div class="kicker">Success Story</div>
      <h2>Mitra yang sudah berjalan</h2>
      <p>Beberapa contoh kemitraan lahan yang telah berproses sampai akad dan pengembangan.</p>
    </div></div>
    <div class="ss-grid" id="ssGrid"></div>
    <div class="ss-note">◆ Kisah pada bagian ini adalah <b>contoh ilustratif untuk keperluan prototipe</b> — bukan transaksi nyata, dan bukan pernyataan mengenai pihak mana pun yang disebutkan.</div>
  </div>
</section>

<section id="sumber" style="background:var(--white);border-top:1px solid var(--line)">
  <div class="wrap">
    <div class="sec-h"><div>
      <div class="kicker">Transparansi Data</div>
      <h2>Sumber &amp; Tanggal Data</h2>
      <p>Setiap angka di katalog ini menunjuk ke sumber dan tanggal cutoff-nya. Yang belum terverifikasi ditandai apa adanya.</p>
    </div>
    <div class="cut-badge">Penarikan data terakhir: <b id="cutTgl">—</b></div></div>
    <div class="src-tbl" id="srcTbl"></div>
  </div>
</section>

<footer><div class="wrap">
  <div style="display:flex;gap:40px;flex-wrap:wrap">
    <div style="flex:1 1 300px">
      <div class="logo" style="color:#fff;margin-bottom:9px"><div class="logo-m">PBS</div>Perumnas Business Solution</div>
      <p>Solusi kemitraan lahan Perum Perumnas.<br>Dikelola Divisi Marketing Retail — Kantor Pusat.</p>
    </div>
    <div><strong>Sebaran</strong><br>Jawa · Sumatera · Sulawesi<br>Kalimantan · Bali–Nusa Tenggara</div>
    <div><strong>Hubungi</strong><br>Divisi Marketing Retail<br>Kantor Pusat Perum Perumnas</div>
  </div>
  <div class="fdis"><strong>Penarikan data terakhir: 26 Juli 2026.</strong> Rincian sumber dan tanggal cutoff per jenis data ada di bagian <a href="#sumber" style="color:#8AE6D8">Sumber &amp; Tanggal Data</a>. <br><strong>Catatan penting:</strong> Foto pada situs ini adalah <strong>ilustrasi dummy</strong> dan peta adalah <strong>peta skematis</strong> — keduanya bukan kondisi lahan sebenarnya maupun citra satelit. Angka pada simulator adalah estimasi awal dari asumsi generik, bukan studi kelayakan. Harga bersifat indikatif; harga transaksi ditetapkan setelah appraisal. Rekomendasi peruntukan belum memperhitungkan RTRW per bidang. Ini prototipe desain, bukan sistem produksi.</div>
</div></footer>

<div class="ov" id="ov" onclick="closeDr()"></div>
<div class="dr" id="dr">
  <div class="dr-hd">
    <div style="flex:1;min-width:0"><h3 id="drT">—</h3><div class="sub" id="drS">—</div></div>
    <button class="btn btn-g btn-sm" onclick="toggleSave(ST.sel)" id="drSaveBtn">♡ Simpan</button>
    <button class="btn btn-g btn-sm" onclick="window.print()" title="Cetak / simpan PDF">⎙</button>
    <button class="btn btn-g btn-sm" onclick="toggleCmp(ST.sel)" id="drCmpBtn">⇄ Bandingkan</button>
    <button class="x" onclick="closeDr()">✕</button>
  </div>
  <div class="tabs">
    <button class="tab on" data-p="p1" onclick="setTab(this)">Ringkasan</button>
    <button class="tab" data-p="p2" onclick="setTab(this)">Lokasi & Sekitar</button>
    <button class="tab" data-p="p3" onclick="setTab(this)">Rekomendasi Peruntukan</button>
    <button class="tab" data-p="p4" onclick="setTab(this)">Analisa Kelayakan</button>
    <button class="tab" data-p="p6" onclick="setTab(this)">Dokumen &amp; Legalitas</button>
  </div>
  <div class="dr-bd">
    <div class="pane on" id="p1"></div><div class="pane" id="p2"></div>
    <div class="pane" id="p3"></div><div class="pane" id="p4"></div><div class="pane" id="p6"></div>
  </div>
</div>

<div class="ov" id="ovC" onclick="closeCompare()"></div>
<div class="dr" id="drC" style="width:min(1080px,100vw)">
  <div class="dr-hd"><div style="flex:1"><h3>Bandingkan Lahan</h3><div class="sub" id="cmpSub">—</div></div>
    <button class="btn btn-g btn-sm" onclick="clearCmp()">Kosongkan</button>
    <button class="x" onclick="closeCompare()">✕</button></div>
  <div class="dr-bd" id="cmpBody"></div>
</div>
<div class="ov" id="ovS" onclick="closeSaved()"></div>
<div class="dr" id="drS2" style="width:min(760px,100vw)">
  <div class="dr-hd"><div style="flex:1"><h3>Lahan Tersimpan</h3><div class="sub" id="savedSub">—</div></div>
    <button class="btn btn-g btn-sm" onclick="clearSaved()">Kosongkan</button>
    <button class="x" onclick="closeSaved()">✕</button></div>
  <div class="dr-bd" id="savedBody"></div>
</div>

<div class="md" id="mdBid"><div class="md-in">
  <div class="md-hd"><div class="box-ic">◆</div><h4>Ajukan Penawaran Harga</h4><button class="x" onclick="closeBid()">✕</button></div>
  <div class="md-bd">
    <div class="note b" style="margin-bottom:16px">◆ <div>Penawaran ini bersifat <b>indikasi awal dan tidak mengikat</b>. Tim Marketing Retail akan menghubungi Anda untuk pembahasan lanjutan sebelum dituangkan dalam perjanjian.</div></div>
    <div class="fld"><label>Lahan yang ditawar</label><input id="bidLand" readonly style="font-weight:650"></div>
    <div class="row2">
      <div class="fld"><label>Harga penawaran Anda (Rp)</label><input id="bidPrice" type="text" inputmode="numeric" placeholder="contoh: 12.000.000.000" oninput="fmtRp(this)">
        <div class="hint2" id="bidRef">—</div></div>
      <div class="fld"><label>Skema pembayaran</label><select id="bidScheme">
        <option>Cash keras (lunas di muka)</option><option>Cash bertahap</option>
        <option>Kerja sama operasi (KSO) / bagi hasil</option><option>Masih terbuka untuk dibahas</option></select></div>
    </div>
    <div class="row2">
      <div class="fld"><label>Rencana penggunaan lahan</label><select id="bidUse"></select></div>
      <div class="fld"><label>Target waktu transaksi</label><select id="bidTime">
        <option>Dalam 1 bulan</option><option>1–3 bulan</option><option>3–6 bulan</option><option>Lebih dari 6 bulan</option></select></div>
    </div>
    <div class="row2">
      <div class="fld"><label>Nama / Perusahaan</label><input id="bidName" placeholder="PT Contoh Sejahtera"></div>
      <div class="fld"><label>Kontak (telepon / email)</label><input id="bidContact" placeholder="0812xxxx / nama@perusahaan.co.id"></div>
    </div>
    <div class="fld"><label>Catatan tambahan</label><textarea id="bidNote" rows="3" placeholder="Misal: kami membutuhkan kepastian peruntukan industri sebelum akad."></textarea></div>
    <div style="display:flex;gap:10px;flex-wrap:wrap">
      <button class="btn btn-t" onclick="submitBid()">Kirim Penawaran</button>
      <button class="btn btn-g" onclick="closeBid()">Batal</button>
    </div>
  </div>
</div></div>

<div class="toast" id="toast"></div>

<div class="lightbox" id="lightbox" onclick="if(event.target.id==='lightbox')closeLightbox()">
  <button class="lb-close" onclick="closeLightbox()" title="Tutup (Esc)">✕</button>
  <button class="lb-nav prev" onclick="event.stopPropagation();lbStep(-1)" title="Foto sebelumnya">‹</button>
  <div class="lb-stage" id="lbStage"></div>
  <button class="lb-nav next" onclick="event.stopPropagation();lbStep(1)" title="Foto berikutnya">›</button>
  <div class="lb-cap" id="lbCap"></div>
  <div class="lb-hint">Klik atau scroll pada gambar untuk zoom · geser saat diperbesar</div>
</div>

<script>
let DATA = [];
let PROVDATA = {};
function rebuildLocationIndexes(){
  PROVDATA = {};
  DATA.forEach(d=>{
    if(PROVDATA[d.prov]) return;
    PROVDATA[d.prov] = {
      pop: d.prov_populasi_juta ?? null,
      v: Number(d.prov_v || 0),
      tier: Number(d.prov_tier || 0),
      dev: d.prov_development || '',
      devlv: Number(d.prov_development_level || 0)
    };
  });
}
const GEO = {"Aceh":[95.32,5.55],"Sumatera Utara":[98.67,3.59],"Sumatera Barat":[100.37,-0.95],"Riau":[101.45,0.51],"Kepulauan Riau":[104.45,1.08],"Jambi":[103.61,-1.61],"Sumatera Selatan":[104.75,-2.99],"Bengkulu":[102.26,-3.8],"Lampung":[105.27,-5.43],"DKI Jakarta":[106.83,-6.18],"Jawa Barat":[107.62,-6.92],"Banten":[106.15,-6.12],"Jawa Tengah":[110.42,-6.99],"DI Yogyakarta":[110.37,-7.8],"Jawa Timur":[112.75,-7.25],"Bali":[115.19,-8.65],"Nusa Tenggara Barat":[116.12,-8.58],"Nusa Tenggara Timur":[123.58,-10.18],"Kalimantan Barat":[109.33,-0.03],"Kalimantan Tengah":[113.92,-2.21],"Kalimantan Selatan":[114.59,-3.32],"Kalimantan Timur":[116.83,-1.24],"Sulawesi Utara":[124.84,1.47],"Sulawesi Tengah":[119.87,-0.9],"Sulawesi Selatan":[119.43,-5.15],"Sulawesi Tenggara":[122.51,-3.99]};
const ISLANDS = {"Sumatera":[[[95.35,5.55],[95.05,5.15],[95.25,4.55],[95.9,4.05],[96.5,3.55],[97.1,3.0],[97.7,2.4],[98.3,1.85],[98.85,1.3],[99.3,0.75],[99.75,0.2],[100.05,-0.5],[100.35,-1.2],[100.8,-1.9],[101.3,-2.6],[101.9,-3.3],[102.5,-3.9],[103.1,-4.5],[103.8,-5.0],[104.5,-5.5],[105.2,-5.85],[105.75,-5.85],[105.9,-5.4],[105.7,-4.9],[105.4,-4.2],[105.0,-3.4],[104.7,-2.6],[104.4,-1.9],[104.0,-1.2],[103.7,-0.5],[103.5,0.2],[103.0,0.85],[102.3,1.15],[101.5,1.55],[100.7,2.15],[100.0,2.75],[99.2,3.4],[98.4,4.0],[97.6,4.6],[96.7,5.15],[95.9,5.6]],[[105.1,-1.55],[106.1,-1.55],[106.35,-2.2],[105.9,-2.9],[105.3,-2.6]],[[107.5,-2.55],[108.35,-2.55],[108.3,-3.1],[107.6,-3.1]]],"Jawa":[[[105.2,-5.9],[105.7,-6.05],[106.3,-5.95],[107.0,-6.1],[107.7,-6.2],[108.5,-6.2],[109.2,-6.45],[110.0,-6.45],[110.5,-6.9],[111.0,-6.65],[111.7,-6.7],[112.4,-6.9],[113.0,-7.1],[113.7,-7.3],[114.35,-7.75],[114.6,-8.4],[114.0,-8.5],[113.3,-8.3],[112.6,-8.4],[111.7,-8.35],[110.9,-8.2],[110.2,-8.15],[109.4,-7.8],[108.6,-7.75],[107.9,-7.75],[107.1,-7.7],[106.5,-7.4],[105.9,-7.0],[105.35,-6.85],[105.2,-6.3]],[[112.75,-6.9],[113.4,-6.9],[114.0,-7.0],[114.15,-7.15],[113.5,-7.25],[112.85,-7.1]]],"Kalimantan":[[[108.85,1.6],[109.6,2.05],[110.3,1.7],[111.0,1.05],[111.8,1.5],[112.5,2.2],[113.3,2.9],[114.1,3.6],[114.9,4.2],[115.6,4.55],[116.4,4.45],[117.2,4.35],[117.9,4.25],[118.6,4.55],[119.0,4.4],[118.7,3.7],[118.0,3.1],[117.7,2.4],[117.6,1.6],[117.45,0.8],[117.65,0.05],[117.3,-0.65],[116.8,-1.25],[116.6,-2.0],[116.45,-2.8],[116.25,-3.5],[115.75,-3.9],[115.15,-4.05],[114.55,-4.15],[114.0,-3.65],[113.3,-3.4],[112.5,-3.5],[111.7,-3.4],[110.9,-3.2],[110.2,-2.95],[109.7,-2.35],[109.3,-1.65],[108.9,-0.95],[108.75,-0.2],[108.85,0.6],[108.9,1.15]]],"Sulawesi":[[[125.2,1.6],[124.4,1.1],[123.5,0.95],[122.6,0.95],[121.7,1.05],[121.0,0.85],[120.4,0.5],[120.05,0.05],[119.85,-0.45],[119.4,-0.85],[119.0,-1.45],[118.8,-2.2],[119.0,-2.9],[119.2,-3.6],[119.45,-4.3],[119.5,-5.0],[119.4,-5.6],[120.0,-5.7],[120.5,-5.55],[120.6,-4.9],[120.75,-4.2],[120.85,-3.5],[121.0,-3.0],[121.35,-3.5],[121.75,-4.05],[122.25,-4.5],[122.75,-4.95],[123.2,-4.3],[122.9,-3.7],[122.45,-3.1],[121.85,-2.5],[121.45,-2.0],[122.1,-1.95],[123.1,-2.05],[124.1,-1.9],[124.85,-1.8],[124.1,-1.4],[123.1,-1.2],[122.1,-1.05],[121.3,-0.95],[120.85,-0.7],[120.6,-0.15],[121.3,-0.2],[122.1,0.25],[123.0,0.3],[123.9,0.45],[124.7,1.05]]],"Bali-Nusra":[[[114.45,-8.15],[115.1,-8.05],[115.6,-8.1],[115.7,-8.4],[115.4,-8.75],[114.9,-8.75],[114.5,-8.5]],[[115.85,-8.2],[116.4,-8.2],[116.7,-8.4],[116.6,-8.85],[116.0,-8.9],[115.8,-8.6]],[[116.9,-8.35],[117.5,-8.15],[118.3,-8.2],[119.1,-8.3],[119.2,-8.7],[118.6,-8.9],[117.9,-8.75],[117.3,-9.0],[116.9,-8.7]],[[119.9,-8.4],[120.7,-8.3],[121.5,-8.4],[122.4,-8.4],[123.2,-8.4],[123.2,-8.8],[122.2,-8.9],[121.2,-8.8],[120.3,-8.9],[119.9,-8.7]],[[118.9,-9.3],[120.0,-9.3],[120.4,-9.6],[120.0,-10.0],[119.2,-9.8]],[[123.5,-9.3],[124.3,-9.1],[125.1,-9.0],[125.6,-9.3],[125.1,-9.9],[124.3,-10.2],[123.6,-10.1]]],"Lainnya":[[[130.9,-1.3],[131.5,-0.8],[132.4,-0.4],[133.2,-0.6],[133.8,-1.2],[134.3,-1.0],[134.6,-1.8],[135.3,-1.6],[136.2,-1.9],[137.2,-2.1],[138.3,-2.3],[139.4,-2.4],[140.9,-2.6],[140.9,-6.9],[140.2,-7.5],[139.3,-8.1],[138.4,-8.4],[137.5,-8.2],[136.9,-7.2],[136.2,-6.2],[135.3,-5.0],[134.4,-4.4],[133.6,-4.1],[132.8,-3.6],[132.0,-3.1],[131.3,-2.7],[130.8,-2.2],[130.6,-1.7]],[[127.3,-0.3],[127.6,0.5],[128.0,1.0],[128.4,1.5],[128.7,1.0],[128.4,0.3],[128.8,-0.3],[128.5,-0.9],[128.0,-0.6],[127.6,-0.8]],[[127.8,-2.9],[128.6,-2.9],[129.5,-3.1],[130.5,-3.2],[130.4,-3.6],[129.4,-3.5],[128.4,-3.4],[127.8,-3.3]],[[126.0,-3.1],[127.0,-3.1],[127.2,-3.5],[126.4,-3.7],[126.0,-3.5]]]};
const POPTIER = ["", "di bawah 3 juta", "3 – 10 juta", "10 – 40 juta", "di atas 40 juta"];
const DEVTIER = ["", "Berkembang", "Aktif", "Prioritas Nasional"];

let ST={lu:'',sel:null,cmp:[],saved:[],visProd:null,visP:{},topic:'Peruntukan',poiCat:'Semua',dp:30,tenor:12,prov:'',why:0,porsi:100,tahap:1,mapMode:'lahan'};
const DOCREQ={};const BIDS={};

const rpM=v=>(!v||v<=0)?'Dalam penilaian':v>=1e12?'Rp'+(v/1e12).toFixed(2).replace('.',',')+' T':v>=1e9?'Rp'+(v/1e9).toFixed(1).replace('.',',')+' M':'Rp'+Math.round(v/1e6).toLocaleString('id-ID')+' jt';
const idn=(n,d=0)=>Number(n||0).toLocaleString('id-ID',{minimumFractionDigits:d,maximumFractionDigits:d});
const esc=s=>String(s??'').replace(/[&<>"]/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[c]));
const toast=m=>{const t=document.getElementById('toast');t.textContent='✓  '+m;t.classList.add('on');clearTimeout(t._x);t._x=setTimeout(()=>t.classList.remove('on'),2600)};
function hash(s){let h=2166136261;for(let i=0;i<s.length;i++){h^=s.charCodeAt(i);h=Math.imul(h,16777619)}return Math.abs(h)}
const rngOf=s=>{let h=hash(s);return()=>{h=(h*1103515245+12345)&0x7fffffff;return h/0x7fffffff}};

const PAL={'Rumah Subsidi FLPP':['#7FB77E','#B7D3A8','#E8D9A0'],'Perumahan Komersial Tapak':['#6FA8B8','#A8CBD6','#DCE8C8'],
'Ruko / Komersial Strip':['#8C7BB5','#B9AED6','#E4DCEF'],'Mixed-Use Komersial':['#5E7CA8','#94AECC','#D3DEEB'],
'Apartemen / Rusun TOD':['#4C6FA5','#7B99C4','#C6D6E8'],'Gudang & Logistik Modern':['#8A93A0','#B6BEC9','#DDE2E8'],
'Kawasan Industri / Pabrik':['#7E8794','#AEB6C1','#D6DAE0'],'Kos-Kosan / Hunian Sewa':['#B58A6F','#D6B79E','#EFE0D2'],
'Kavling Matang / Tanah Investasi':['#A79A6C','#CFC49B','#EAE3C8'],
'Gerai Ritel Tunggal (Minimarket/Klinik/SPBU)':['#C2846B','#DDB49F','#F1E0D4'],'Agribisnis / Perkebunan':['#6E9B54','#A3C185','#D9E7C4']};
const FOTO_KEYS=['foto','foto_batas','foto_akses','foto_sekitar'];
function photo(d,variant){
  const url=d[FOTO_KEYS[variant||0]];
  if(url){return '<img src="'+esc(url)+'" alt="Foto '+esc(VIEWS[variant||0])+' — '+esc(d.lokasi)+'" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">'}
  const p=PAL[d.produk]||['#7FA0B8','#A9C3D4','#DCE6EE'], rnd=rngOf(d.lokasi+'|'+(variant||0));
  const W=400,H=250,gid='g'+hash(d.lokasi+variant)%99999;
  let s='<svg viewBox="0 0 '+W+' '+H+'" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><defs>'
   +'<linearGradient id="'+gid+'" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="'+p[2]+'"/><stop offset="1" stop-color="'+p[1]+'"/></linearGradient></defs>'
   +'<rect width="'+W+'" height="'+H+'" fill="url(#'+gid+')"/>';
  for(let i=0;i<3;i++){const y=40+i*70+rnd()*20;
    s+='<path d="M0 '+y+' Q '+(W*.3)+' '+(y-18+rnd()*36)+' '+(W*.55)+' '+y+' T '+W+' '+(y-8)+'" stroke="'+p[0]+'" stroke-opacity=".16" stroke-width="1.5" fill="none"/>'}
  const cols=3+Math.floor(rnd()*3),rows=2+Math.floor(rnd()*2),bw=(W-70)/cols,bh=(H-90)/rows;
  for(let r=0;r<rows;r++)for(let c=0;c<cols;c++){
    if(rnd()<.16)continue;
    const x=35+c*bw+3,y=45+r*bh+3,w=bw-9,hh=bh-9;
    s+='<rect x="'+x.toFixed(1)+'" y="'+y.toFixed(1)+'" width="'+w.toFixed(1)+'" height="'+hh.toFixed(1)+'" rx="2" fill="'+p[0]+'" fill-opacity="'+(.2+rnd()*.34).toFixed(2)+'"/>';
    if(rnd()<.55){const iw=w*(.4+rnd()*.35),ih=hh*(.4+rnd()*.32);
      s+='<rect x="'+(x+(w-iw)/2).toFixed(1)+'" y="'+(y+(hh-ih)/2).toFixed(1)+'" width="'+iw.toFixed(1)+'" height="'+ih.toFixed(1)+'" rx="1.5" fill="#fff" fill-opacity=".4"/>'}}
  s+='<rect x="0" y="'+(H*.5-7).toFixed(1)+'" width="'+W+'" height="13" fill="#EEF1F4" fill-opacity=".72"/>'
   +'<line x1="0" y1="'+(H*.5-.5).toFixed(1)+'" x2="'+W+'" y2="'+(H*.5-.5).toFixed(1)+'" stroke="#fff" stroke-width="1.4" stroke-dasharray="11 9" stroke-opacity=".85"/>';
  for(let i=0;i<11;i++)s+='<circle cx="'+(rnd()*W).toFixed(0)+'" cy="'+(rnd()*H).toFixed(0)+'" r="'+(3.5+rnd()*7).toFixed(1)+'" fill="#4E7A3E" fill-opacity="'+(.1+rnd()*.2).toFixed(2)+'"/>';
  return s+'</svg>';
}
const VIEWS=['Tampak Udara','Batas Lahan','Akses Jalan','Sekitar Lokasi'];

/* ---------- VISIONING KAWASAN: ilustrasi konsep pengembangan per produk ---------- */
function kawasan(d){
  const rnd=rngOf('kw|'+d.lokasi+d.produk), P=d.produk, W=760,H=300;
  const sky='#DCEAF4',grn='#CFE3BC',rd='#E7E9EC';
  let s='<svg viewBox="0 0 '+W+' '+H+'" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">'
   +'<defs><linearGradient id="kg" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="'+sky+'"/><stop offset="1" stop-color="#EEF4F8"/></linearGradient>'
   +'<linearGradient id="kf" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#E4EFDA"/><stop offset="1" stop-color="'+grn+'"/></linearGradient></defs>'
   +'<rect width="'+W+'" height="'+H+'" fill="url(#kg)"/>'
   +'<path d="M0 118 Q 150 96 300 112 T 600 104 T '+W+' 114 L '+W+' '+H+' L 0 '+H+' Z" fill="url(#kf)"/>';
  // siluet bukit latar
  s+='<path d="M0 118 Q 90 82 180 116 Q 250 92 330 118 L 330 124 L 0 124 Z" fill="#B9CFDD" fill-opacity=".55"/>'
   +'<path d="M380 116 Q 470 78 560 114 Q 650 88 '+W+' 112 L '+W+' 122 L 380 122 Z" fill="#B9CFDD" fill-opacity=".42"/>';
  // jalan utama perspektif
  s+='<path d="M-20 '+H+' L 300 132 L 460 132 L '+(W+20)+' '+H+' Z" fill="'+rd+'"/>'
   +'<path d="M150 '+H+' L 352 138 L 372 138 L 300 '+H+' Z" fill="#fff" fill-opacity=".55"/>';
  const bar=(x,y,w,hh,f,o)=>'<rect x="'+x.toFixed(0)+'" y="'+y.toFixed(0)+'" width="'+w.toFixed(0)+'" height="'+hh.toFixed(0)+'" rx="2" fill="'+f+'" fill-opacity="'+(o||1)+'"/>';
  const roof=(x,y,w,hh,f)=>'<path d="M'+x.toFixed(0)+' '+y.toFixed(0)+' L '+(x+w/2).toFixed(0)+' '+(y-hh).toFixed(0)+' L '+(x+w).toFixed(0)+' '+y.toFixed(0)+' Z" fill="'+f+'"/>';
  const tree=(x,y,r)=>'<circle cx="'+x.toFixed(0)+'" cy="'+y.toFixed(0)+'" r="'+r.toFixed(0)+'" fill="#6E9B54" fill-opacity=".8"/><rect x="'+(x-1.4).toFixed(0)+'" y="'+y.toFixed(0)+'" width="3" height="'+(r*.9).toFixed(0)+'" fill="#7A6248"/>';
  if(P==='Apartemen / Rusun TOD'||P==='Mixed-Use Komersial'){
    for(let i=0;i<7;i++){const x=60+i*98+rnd()*18,hh=78+rnd()*92,w=52+rnd()*20,y=250-hh;
      s+=bar(x,y,w,hh,'#8FA9C4')+bar(x,y,w*.32,hh,'#A9C0D6');
      for(let r2=0;r2<Math.floor(hh/17);r2++)for(let c=0;c<3;c++)
        s+=bar(x+7+c*(w-14)/3,y+9+r2*17,(w-20)/3.6,8,'#F2F7FB',.85);
      s+=bar(x-4,250,w+8,10,'#7C93AC');}
    s+=bar(0,258,W,42,'#C9D6C0');
    for(let i=0;i<9;i++)s+=tree(30+i*88+rnd()*18,276,7+rnd()*4);
  } else if(P==='Gudang & Logistik Modern'||P==='Kawasan Industri / Pabrik'){
    for(let i=0;i<4;i++){const x=48+i*180,y=150+rnd()*16,w=152,hh=62;
      s+=bar(x,y,w,hh,'#B9C3CD')+bar(x,y,w,9,'#9AA6B2');
      for(let k=0;k<6;k++)s+=bar(x+9+k*24,y+hh-22,15,20,'#6E7B88',.55);
      s+=bar(x,y+hh,w,5,'#8894A1');}
    s+=bar(0,232,W,68,'#D5DBE0');
    for(let i=0;i<5;i++){const tx=40+i*160+rnd()*30;
      s+=bar(tx,248,54,17,'#F0F2F4')+bar(tx+54,251,20,14,'#9FB0C0')
       +'<circle cx="'+(tx+12)+'" cy="266" r="4.5" fill="#3F4E60"/><circle cx="'+(tx+46)+'" cy="266" r="4.5" fill="#3F4E60"/>';}
  } else if(P==='Ruko / Komersial Strip'||P==='Gerai Ritel Tunggal (Minimarket/Klinik/SPBU)'){
    for(let i=0;i<9;i++){const x=40+i*80,w=68,hh=88,y=146;
      s+=bar(x,y,w,hh,i%2?'#C8B9DC':'#D6CBE6')+bar(x,y,w,10,'#A996C4')
       +bar(x+8,y+18,w-16,26,'#EFE9F7')+bar(x+8,y+56,w-16,32,'#8C7BB5',.28)
       +bar(x+6,y+52,w-12,5,'#0E9F8E',.7);}
    s+=bar(0,234,W,66,'#D9DCE0');
    for(let i=0;i<6;i++)s+=tree(56+i*130,262,8);
  } else if(P==='Kavling Matang / Tanah Investasi'||P==='Agribisnis / Perkebunan'){
    for(let r2=0;r2<4;r2++)for(let c=0;c<8;c++){const x=34+c*90,y=150+r2*36;
      s+=bar(x,y,78,28,P==='Agribisnis / Perkebunan'?'#8FB56C':'#D8CFA8',.75)
       +'<rect x="'+x+'" y="'+y+'" width="78" height="28" fill="none" stroke="#fff" stroke-width="1.6"/>';}
  } else { // hunian tapak (FLPP & komersial)
    for(let r2=0;r2<3;r2++){const yb=176+r2*42, sc=1-r2*.13;
      for(let i=0;i<9;i++){const x=20+i*84+r2*22+rnd()*8,w=58*sc,hh=34*sc;
        s+=bar(x,yb,w,hh,r2%2?'#F0E6D2':'#EDE0CA')+roof(x-5,yb,w+10,20*sc,r2%2?'#B4664F':'#A9584A')
         +bar(x+w*.38,yb+hh*.42,w*.24,hh*.58,'#8B6A4F')
         +bar(x+w*.08,yb+hh*.24,w*.2,hh*.26,'#BFD8E8');}
      s+=bar(0,yb+42*sc-4,W,7,'#DDE0E4');}
    for(let i=0;i<11;i++)s+=tree(24+i*72+rnd()*16,282,8+rnd()*4);
  }
  return s+'</svg>';
}

/* ---------- PETA SKEMATIS ---------- */
const CAT={'Transportasi':'#2F6FD0','Pendidikan':'#8A5CD6','Kesehatan':'#D14343','Komersial':'#D98A0B','Industri & Logistik':'#5B6B7F','Pemerintahan':'#0A7A6D','Wisata':'#0E9F8E','Permukiman':'#1E9E5A'};
const catColor=c=>CAT[c]||'#5B6B7F';
function poisOf(d){
  const named = Array.isArray(d.poi) ? d.poi : [];
  return named.slice(0,10).map(x => ({
    n: x.nama || '',
    c: x.kategori || '',
    m: x.deskripsi || '',
    jarak: x.jarak_km != null ? '± '+x.jarak_km+' km' : '—',
    waktu: x.waktu_menit != null ? x.waktu_menit+' menit' : '—'
  }));
}
function mapSvg(d){
  const rnd=rngOf('map|'+d.lokasi),W=640,H=430,pois=poisOf(d),gid='mg'+hash(d.lokasi)%99999;
  let s='<svg viewBox="0 0 '+W+' '+H+'" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">'
   +'<defs><linearGradient id="'+gid+'" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#F2F1E8"/><stop offset="1" stop-color="#E9EDE4"/></linearGradient></defs>'
   +'<rect width="'+W+'" height="'+H+'" fill="url(#'+gid+')"/>';
  for(let i=0;i<5;i++)s+='<ellipse cx="'+(rnd()*W).toFixed(0)+'" cy="'+(rnd()*H).toFixed(0)+'" rx="'+(26+rnd()*54).toFixed(0)+'" ry="'+(20+rnd()*40).toFixed(0)+'" fill="#CFE0BE" fill-opacity=".85"/>';
  if(rnd()<.55){const y=60+rnd()*300;
    s+='<path d="M-10 '+y.toFixed(0)+' C '+(W*.25).toFixed(0)+' '+(y-46+rnd()*30).toFixed(0)+', '+(W*.55).toFixed(0)+' '+(y+52-rnd()*30).toFixed(0)+', '+(W+10)+' '+(y-16).toFixed(0)+'" stroke="#A9CBE0" stroke-width="'+(9+rnd()*7).toFixed(0)+'" fill="none" stroke-linecap="round"/>'}
  const ay=H*.5+(rnd()-.5)*70, ay2=ay+(rnd()-.5)*54;
  s+='<path d="M-10 '+ay.toFixed(0)+' L '+(W+10)+' '+ay2.toFixed(0)+'" stroke="#D9C97E" stroke-width="17" fill="none"/>'
   +'<path d="M-10 '+ay.toFixed(0)+' L '+(W+10)+' '+ay2.toFixed(0)+'" stroke="#F3E9AE" stroke-width="12" fill="none"/>';
  const ax=W*(.3+rnd()*.4), ax2=ax+(rnd()-.5)*60;
  s+='<path d="M'+ax.toFixed(0)+' -10 L '+ax2.toFixed(0)+' '+(H+10)+'" stroke="#E2E6EA" stroke-width="13" fill="none"/>'
   +'<path d="M'+ax.toFixed(0)+' -10 L '+ax2.toFixed(0)+' '+(H+10)+'" stroke="#FFF" stroke-width="9" fill="none"/>';
  for(let i=0;i<7;i++){const hz=rnd()<.5,a=rnd()*(hz?H:W),b=rnd()*(hz?H:W);
    s+=hz?'<line x1="-10" y1="'+a.toFixed(0)+'" x2="'+(W+10)+'" y2="'+b.toFixed(0)+'" stroke="#fff" stroke-width="4.5" stroke-opacity=".9"/>'
         :'<line x1="'+a.toFixed(0)+'" y1="-10" x2="'+b.toFixed(0)+'" y2="'+(H+10)+'" stroke="#fff" stroke-width="4.5" stroke-opacity=".9"/>'}
  for(let i=0;i<52;i++)s+='<rect x="'+(rnd()*W).toFixed(0)+'" y="'+(rnd()*H).toFixed(0)+'" width="'+(7+rnd()*20).toFixed(0)+'" height="'+(6+rnd()*15).toFixed(0)+'" rx="1.5" fill="#C9CFD6" fill-opacity="'+(.4+rnd()*.4).toFixed(2)+'"/>';
  const cx=W*.46,cy=H*.44,sw=118+rnd()*54,sh=84+rnd()*44;
  const pts=[[cx-sw/2,cy-sh/2],[cx+sw/2-8-rnd()*18,cy-sh/2-4],[cx+sw/2,cy+sh/2-14],[cx-sw/2+10+rnd()*14,cy+sh/2]].map(p=>p.map(v=>v.toFixed(0)).join(',')).join(' ');
  s+='<polygon points="'+pts+'" fill="#0E9F8E" fill-opacity=".26" stroke="#0A7A6D" stroke-width="3" stroke-dasharray="9 5"/>'
   +'<polygon points="'+pts+'" fill="none" stroke="#fff" stroke-width="1"/>'
   +'<circle cx="'+cx.toFixed(0)+'" cy="'+cy.toFixed(0)+'" r="16" fill="#0A7A6D"/>'
   +'<circle cx="'+cx.toFixed(0)+'" cy="'+cy.toFixed(0)+'" r="16" fill="none" stroke="#fff" stroke-width="2.5"/>'
   +'<text x="'+cx.toFixed(0)+'" y="'+(cy+5).toFixed(0)+'" text-anchor="middle" font-family="system-ui,sans-serif" font-size="14" font-weight="800" fill="#fff">&#9733;</text>'
   +'<rect x="'+(cx-54).toFixed(0)+'" y="'+(cy+sh/2+8).toFixed(0)+'" width="108" height="24" rx="6" fill="#0B2540" fill-opacity=".92"/>'
   +'<text x="'+cx.toFixed(0)+'" y="'+(cy+sh/2+24).toFixed(0)+'" text-anchor="middle" font-family="system-ui,sans-serif" font-size="11.5" font-weight="700" fill="#fff">Lahan '+idn(d.ha,2)+' Ha</text>';
  pois.forEach((p,i)=>{
    const ang=(i/pois.length)*Math.PI*2+rnd()*.5,rad=112+rnd()*86;
    const px=Math.max(22,Math.min(W-22,cx+Math.cos(ang)*rad)),py=Math.max(22,Math.min(H-30,cy+Math.sin(ang)*rad*.72));
    s+='<circle cx="'+px.toFixed(0)+'" cy="'+py.toFixed(0)+'" r="12" fill="'+catColor(p.c)+'" stroke="#fff" stroke-width="2.5"/>'
     +'<text x="'+px.toFixed(0)+'" y="'+(py+4).toFixed(0)+'" text-anchor="middle" font-family="system-ui,sans-serif" font-size="11" font-weight="800" fill="#fff">'+(i+1)+'</text>'});
  s+='<g transform="translate('+(W-40)+',34)"><circle r="15" fill="#fff" fill-opacity=".92"/>'
   +'<path d="M0 -10 L4 4 L0 1 L-4 4 Z" fill="#0B2540"/>'
   +'<text y="-17" text-anchor="middle" font-family="system-ui,sans-serif" font-size="8.5" font-weight="800" fill="#0B2540">U</text></g>'
   +'<g transform="translate(20,'+(H-24)+')"><rect width="74" height="4" fill="#0B2540" fill-opacity=".55" rx="1"/>'
   +'<text y="-5" font-family="system-ui,sans-serif" font-size="9" font-weight="700" fill="#3F4E60">skala skematis</text></g>';
  return s+'</svg>';
}
const addrOf=d=>d.alamat||null;
function mapsUrl(d){
  if(d.maps_link) return d.maps_link;
  return 'https://www.google.com/maps/search/?api=1&query='+encodeURIComponent(
    ((d.alamat||'')+' '+(d.lokasi||'')+' '+(d.kota||'')+' '+(d.prov||'')).trim()
  );
}


/* ---------- filter & grid ---------- */
function buildPlans(){
  const cnt={},ha={};
  DATA.forEach(d=>{cnt[d.produk]=(cnt[d.produk]||0)+1;ha[d.produk]=(ha[d.produk]||0)+(d.ha||0)});
  const cur=document.getElementById('fProd').value;
  document.getElementById('planGrid').innerHTML=
   '<button class="pl'+(cur?'':' on')+'" onclick="pickPlan(\'\')">'
   +'<div class="pl-ic all">◈</div>'
   +'<div class="pl-b"><div class="pl-t">Semua Rencana</div><div class="pl-s">'+DATA.length+' lahan</div></div></button>'
   +Object.keys(cnt).sort((a,b)=>cnt[b]-cnt[a]).map(pd=>
     '<button class="pl'+(cur===pd?' on':'')+'" onclick="pickPlan(\''+pd.replace(/'/g,"")+'\')">'
     +'<div class="pl-ic">'+(SCEN[pd]?SCEN[pd].icon:'◆')+'</div>'
     +'<div class="pl-b"><div class="pl-t">'+esc(pd.split(' (')[0])+'</div>'
     +'<div class="pl-s">'+cnt[pd]+' lahan · '+idn(ha[pd],0)+' Ha</div></div></button>').join('');
}
function pickPlan(pd){
  document.getElementById('fProd').value=pd;
  buildPlans();render();
  if(pd)toast('Menampilkan lahan untuk '+pd);
}
function fill(){
  const P=[...new Set(DATA.map(d=>d.pulau))].sort(),R=[...new Set(DATA.map(d=>d.produk))].sort();
  document.getElementById('fPulau').insertAdjacentHTML('beforeend',P.map(x=>'<option>'+esc(x)+'</option>').join(''));
  document.getElementById('fProd').insertAdjacentHTML('beforeend',R.map(x=>'<option>'+esc(x)+'</option>').join(''));
}
const setLu=b=>{document.querySelectorAll('.chip').forEach(c=>c.classList.remove('on'));b.classList.add('on');ST.lu=b.dataset.lu;render()};
const clrProv=()=>{ST.prov='';buildHero();render()};
function filtered(){
  const q=document.getElementById('q').value.toLowerCase().trim();
  const pu=document.getElementById('fPulau').value,pr=document.getElementById('fProd').value;
  const hg=document.getElementById('fHarga').value,so=document.getElementById('fSort').value;
  let out=DATA.filter(d=>{
    if(ST.prov&&d.prov!==ST.prov)return false;
    if(pu&&d.pulau!==pu)return false;
    if(pr&&d.produk!==pr)return false;
    if(hg){const p=hg.split('-').map(Number),m=(d.nilai||0)/1e9;if(m<p[0]||m>=p[1])return false}
    if(ST.lu){const p=ST.lu.split('-').map(Number),h=d.ha||0;if(h<p[0]||h>=p[1])return false}
    if(q){const hay=(d.lokasi+' '+d.pulau+' '+d.produk+' '+d.alt+' '+d.konteks+' '+(addrOf(d)||'')).toLowerCase();if(hay.indexOf(q)<0)return false}
    return true});
  const s={luas:(a,b)=>(b.ha||0)-(a.ha||0),murah:(a,b)=>(a.nilai||0)-(b.nilai||0),
    mahal:(a,b)=>(b.nilai||0)-(a.nilai||0),nama:(a,b)=>a.lokasi.localeCompare(b.lokasi,'id')};
  return out.sort(s[so]);
}
function render(){
  const rows=filtered(),g=document.getElementById('grid');
  document.getElementById('fMeta').innerHTML=rows.length+' lahan ditampilkan'
   +(ST.prov?' · <b style="color:var(--teal-dk)">'+esc(ST.prov)+'</b> <span style="cursor:pointer;text-decoration:underline" onclick="ST.prov=\'\';buildHero();render()">hapus filter</span>':'');
  if(!rows.length){g.innerHTML='<div class="empty"><div class="e-ic">⌕</div><div style="font-weight:650;color:var(--ink);margin-bottom:5px">Tidak ada lahan yang cocok</div><div style="font-size:13.5px">Coba longgarkan filter anggaran, ukuran, atau rencana bisnisnya.</div></div>';return}
  g.innerHTML=rows.map(d=>{
    const i=DATA.indexOf(d),on=ST.cmp.indexOf(i)>-1,ad=addrOf(d),np=(Array.isArray(d.poi)?d.poi.length:0);
    return '<div class="card" onclick="openDr('+i+')">'
     +'<div class="ph">'+photo(d,0)
     +'<div class="ph-tags"><span class="tag t-prod">◆ '+esc(d.produk)+'</span>'+(d.foto?'':'<span class="tag t-dummy">Foto ilustrasi</span>')+'</div>'
     +'<div class="ph-cmp '+(on?'on':'')+'" title="Bandingkan" onclick="event.stopPropagation();toggleCmp('+i+')">'+(on?'✓':'⇄')+'</div>'
     +'<div class="save-btn '+(ST.saved.indexOf(i)>-1?'on':'')+'" title="Simpan" onclick="event.stopPropagation();toggleSave('+i+')">'+(ST.saved.indexOf(i)>-1?'♥':'♡')+'</div></div>'
     +'<div class="cb"><div class="c-loc">◈ '+esc(d.pulau)+'</div><h3>'+esc(d.lokasi)+'</h3>'
     +'<div class="c-addr"><span style="flex-shrink:0">⌖</span><span>'+(ad?esc(ad):'Alamat lengkap tersedia saat konsultasi')+'</span></div>'
     +'<div class="c-facts"><div><div class="fact-l">Luas</div><div class="fact-v">'+idn(d.ha,2)+' Ha</div></div>'
     +'<div><div class="fact-l">Harga Indikatif</div><div class="fact-v"'+((d.nilai||0)<=0?' style="font-size:12.5px"':'')+'>'+rpM(d.nilai)+'</div></div></div>'
     +'<div class="c-foot"><span class="mini">'+((d.ha||0)<5?'◆ Diambil utuh':'◱ Bisa bertahap')+'</span><span class="go">Lihat detail →</span></div></div></div>'}).join('');
}

/* ---------- compare ---------- */
function toggleCmp(i){
  if(i===null||i===undefined)return;
  const k=ST.cmp.indexOf(i);
  if(k>-1)ST.cmp.splice(k,1);
  else{if(ST.cmp.length>=3){toast('Maksimal 3 lahan dibandingkan sekaligus');return}ST.cmp.push(i);toast('Ditambahkan ke perbandingan')}
  syncCmp();render();if(ST.sel!==null)drCmpLabel();
}
function syncCmp(){document.getElementById('cmpN').textContent=ST.cmp.length;document.getElementById('cmpPill').classList.toggle('on',ST.cmp.length>0)}
const clearCmp=()=>{ST.cmp=[];syncCmp();render();closeCompare()};
function drCmpLabel(){const b=document.getElementById('drCmpBtn'),on=ST.cmp.indexOf(ST.sel)>-1;
  b.textContent=on?'✓ Dibandingkan':'⇄ Bandingkan';b.style.borderColor=on?'var(--violet)':'';b.style.color=on?'var(--violet)':''}
function openCompare(){
  if(!ST.cmp.length){toast('Pilih dulu lahan yang mau dibandingkan (ikon ⇄ di kartu)');return}
  const ds=ST.cmp.map(i=>DATA[i]);
  document.getElementById('cmpSub').textContent=ds.length+' lahan dipilih · maksimal 3';
  const R=[
    ['Lokasi',d=>'<b>'+esc(d.lokasi)+'</b><br><span style="color:var(--muted);font-size:12px">'+esc(d.pulau)+'</span>'],
    ['Peta skematis',d=>'<div style="height:98px;border-radius:8px;overflow:hidden">'+mapSvg(d)+'</div>'],
    ['Alamat',d=>'<span style="font-size:12px">'+esc(addrOf(d)||'Tersedia saat konsultasi')+'</span><br><a href="'+mapsUrl(d)+'" target="_blank" rel="noopener" style="font-size:11.5px;font-weight:700;color:var(--teal-dk)">Buka di Google Maps ↗</a>'],
    ['Luas',d=>idn(d.ha,2)+' Ha<br><span style="color:var(--muted);font-size:12px">'+idn(d.luas_m2)+' m²</span>'],
    ['Harga indikatif',d=>'<b>'+rpM(d.nilai)+'</b>'],
    ['Rekomendasi produk',d=>'<b>'+esc(d.produk)+'</b><br><span style="color:var(--muted);font-size:12px">Alternatif: '+esc(d.alt)+'</span>'],
    ['Konteks pasar',d=>'<span style="font-size:12px">'+esc(d.konteks)+'</span>'],
    ['Titik sekitar',d=>{const p=Array.isArray(d.poi)?d.poi:[];return p.length?'<span style="font-size:12px">'+p.slice(0,3).map(x=>esc(x.nama||'')).join('<br>')+'</span>':'<span style="color:var(--muted);font-size:12px">Belum ada data titik sekitar</span>'}],
  ];
  document.getElementById('cmpBody').innerHTML='<table class="cmp-tbl"><tr><th>Parameter</th>'+ds.map(d=>'<th>'+esc(d.lokasi)+'</th>').join('')+'</tr>'
   +R.map(r=>'<tr><td>'+r[0]+'</td>'+ds.map(d=>'<td>'+r[1](d)+'</td>').join('')+'</tr>').join('')+'</table>'
   +'<div class="cta" style="margin-top:18px"><h4>Sudah menemukan yang cocok?</h4>'
   +'<p>Tim Marketing Retail bisa menyiapkan paparan penawaran untuk lahan pilihan Anda, termasuk plotting dan indikasi harga.</p>'
   +'<div class="cta-b"><button class="btn btn-t" onclick="toast(\'Permintaan paparan penawaran terkirim\')">Minta Paparan Penawaran</button>'
   +'<button class="btn btn-g" onclick="toast(\'Permintaan jadwal site visit terkirim\')">Jadwalkan Site Visit</button></div></div>';
  document.getElementById('ovC').classList.add('on');document.getElementById('drC').classList.add('on');document.body.style.overflow='hidden';
}
const closeCompare=()=>{document.getElementById('ovC').classList.remove('on');document.getElementById('drC').classList.remove('on');if(!document.getElementById('dr').classList.contains('on'))document.body.style.overflow=''};

/* ---------- drawer ---------- */
function openDr(i){
  ST.sel=i;const d=DATA[i];ST.visProd=d.produk;ST.visP={};ST.poiCat='Semua';ST.porsi=100;ST.tahap=1;ST.dp=30;ST.tenor=12;
  document.getElementById('drT').textContent=d.lokasi;
  document.getElementById('drS').textContent=d.pulau+' · '+idn(d.ha,2)+' Ha · '+rpM(d.nilai);
  paneSummary(d);paneMap(d);paneRec(d);paneVis(d);paneDocs(d,i);drCmpLabel();drSaveLabel();
  const visTab=document.querySelector('[data-p=p4]');visTab.style.display=(d.nilai||0)>0?'':'none';
  document.querySelectorAll('.tab').forEach((t,k)=>t.classList.toggle('on',k===0));
  document.querySelectorAll('.pane').forEach((p,k)=>p.classList.toggle('on',k===0));
  document.getElementById('ov').classList.add('on');document.getElementById('dr').classList.add('on');document.body.style.overflow='hidden';
  document.querySelector('.dr-bd').scrollTop=0;
}
const closeDr=()=>{closeLightbox();document.getElementById('ov').classList.remove('on');document.getElementById('dr').classList.remove('on');if(!document.getElementById('drC').classList.contains('on'))document.body.style.overflow=''};
const setTab=b=>{document.querySelectorAll('.tab').forEach(t=>t.classList.remove('on'));b.classList.add('on');
  document.querySelectorAll('.pane').forEach(p=>p.classList.remove('on'));document.getElementById(b.dataset.p).classList.add('on');
  document.querySelector('.dr-bd').scrollTop=0};

function paneSummary(d){
  const ad=addrOf(d), semuaFotoAsli=FOTO_KEYS.every(k=>d[k]), di=DATA.indexOf(d);
  document.getElementById('p1').innerHTML=
   '<div class="hero-img" onclick="openLightbox('+di+',0)">'+photo(d,0)+'<div class="ph-zoom">⤢ Perbesar</div></div>'
   +'<div class="thumbs">'+VIEWS.map((v,k)=>'<div onclick="openLightbox('+di+','+k+')">'+photo(d,k)+'<span>'+v+'</span></div>').join('')+'</div>'
   +(semuaFotoAsli?'':'<div class="note">⚠ <div><b>Sebagian foto masih ilustrasi otomatis.</b> Slot foto yang belum diunggah admin ditampilkan sebagai ilustrasi — bukan kondisi lahan sebenarnya. Foto asli disediakan tim survei.</div></div>')
   +'<div class="addr-bar"><div class="ai">⌖</div><div style="flex:1;min-width:180px">'
   +'<div style="font-size:10.5px;font-weight:750;text-transform:uppercase;letter-spacing:.5px;color:var(--muted);margin-bottom:3px">Alamat</div>'
   +'<div style="font-size:13.5px;font-weight:620;line-height:1.5">'+(ad?esc(ad):'Alamat lengkap disampaikan saat konsultasi')+'</div></div>'
   +'<a class="btn btn-g btn-sm" href="'+mapsUrl(d)+'" target="_blank" rel="noopener">Google Maps ↗</a></div>'
   +'<div class="box"><div class="box-h"><div class="box-ic">▤</div><h4>Data Lahan</h4></div><div class="dl">'
   +'<div><dt>Luas</dt><dd>'+idn(d.ha,2)+' Ha<small>'+idn(d.luas_m2)+' m²</small></dd></div>'
   +'<div><dt>Harga Indikatif</dt><dd>'+rpM(d.nilai)+'<small>final setelah appraisal</small></dd></div>'
   +'<div><dt>Wilayah</dt><dd style="font-size:14px">'+esc(d.pulau)+'</dd></div></div></div>'
   +'<div class="box"><div class="box-h"><div class="box-ic">◈</div><h4>Konteks Pasar Lokasi</h4></div><p class="prose">'+esc(d.konteks)+'</p></div>'
   +'<div class="box"><div class="box-h"><div class="box-ic">◆</div><h4>Paling Cocok Untuk</h4></div>'
   +'<div class="rec"><div class="rec-c pri"><div class="rec-lbl">Produk Utama</div><div class="rec-n">'+esc(d.produk)+'</div></div>'
   +'<div class="rec-c"><div class="rec-lbl">Alternatif</div><div class="rec-n">'+esc(d.alt)+'</div></div></div>'
   +'<button class="btn btn-g btn-sm" onclick="setTab(document.querySelector(\'[data-p=p3]\'))">Lihat alasan lengkapnya →</button></div>'
   +'<div class="cta"><h4>Tertarik dengan lahan ini?</h4>'
   +'<p>Periksa <b>Lokasi &amp; Sekitar</b> untuk melihat lingkungannya, atau buka <b>Analisa Kelayakan</b> untuk menghitung angka dengan asumsi Anda sendiri.</p>'
   +'<div class="cta-b"><button class="btn btn-t" onclick="openBid('+DATA.indexOf(d)+')">Ajukan Penawaran Harga</button>'
   +'<button class="btn btn-g" onclick="toast(\'Permintaan site visit terkirim ke tim regional\')">Jadwalkan Site Visit</button>'
   +'<button class="btn btn-g" onclick="setTab(document.querySelector(\'[data-p=p2]\'))">Lihat Peta →</button></div></div>'
   +similar(d);
}

function paneMap(d){
  const ad=addrOf(d),pois=poisOf(d);
  const cats=['Semua'].concat([...new Set(pois.map(p=>p.c))]);
  document.getElementById('p2').innerHTML=
   '<div class="map-wrap"><div class="map-c">'+mapSvg(d)
   +'<div class="map-badge">★ '+esc(d.lokasi)+'</div>'
   +'<a class="btn btn-t btn-sm map-open" href="'+mapsUrl(d)+'" target="_blank" rel="noopener">Buka Google Maps ↗</a>'
   +'<div class="map-legend"><i style="background:#0E9F8E"></i>Lahan ditawarkan<br>'
   +'<i style="background:#F3E9AE"></i>Jalan arteri &nbsp;<i style="background:#fff;border:1px solid #ccc"></i>Jalan lokal<br>'
   +'<i style="background:#CFE0BE"></i>Ruang hijau &nbsp;<i style="background:#A9CBE0"></i>Sungai</div></div>'
   +'<div class="poi-c"><div class="poi-hd"><h4>Di sekitar lokasi</h4><p>Nomor sesuai penanda di peta</p></div>'
   +'<div class="poi-tabs">'+cats.map(c=>'<button class="'+(c===ST.poiCat?'on':'')+'" onclick="ST.poiCat=\''+c+'\';paneMap(DATA[ST.sel])">'+esc(c)+'</button>').join('')+'</div>'
   +'<div class="poi-list">'+pois.map((p,i)=>(ST.poiCat==='Semua'||p.c===ST.poiCat)?
     '<div class="poi"><div class="poi-pin" style="background:'+catColor(p.c)+'">'+(i+1)+'</div>'
     +'<div class="poi-b"><div class="poi-n">'+esc(p.n)+'</div><div class="poi-m">'+esc(p.c)+(p.m?' · '+esc(p.m):'')+'</div></div>'
     +'<div class="poi-d"><span class="poi-km">'+esc(p.jarak)+'</span><span class="poi-mn">◷ '+esc(p.waktu)+'</span></div></div>':'').join('')
   +'</div></div></div>'
   +'<div class="note b">⌖ <div><b>Peta di atas adalah peta skematis</b> — menggambarkan posisi lahan relatif terhadap jalan dan lingkungan sekitarnya, bukan citra satelit atau batas kadastral. <b>Jarak dan waktu tempuh ditampilkan sebagai rentang perkiraan</b> berdasarkan kedekatan wilayah — bukan pengukuran rute. Angka persisnya dikonfirmasi tim survei. Untuk melihat lokasi sebenarnya, gunakan tombol <b>Buka Google Maps</b>.</div></div>'
   +'<div class="addr-bar"><div class="ai">⌖</div><div style="flex:1;min-width:180px">'
   +'<div style="font-size:10.5px;font-weight:750;text-transform:uppercase;letter-spacing:.5px;color:var(--muted);margin-bottom:3px">Alamat</div>'
   +'<div style="font-size:13.5px;font-weight:620;line-height:1.5">'+(ad?esc(ad):'Alamat lengkap disampaikan saat konsultasi')+'</div></div>'
   +'<a class="btn btn-t btn-sm" href="'+mapsUrl(d)+'" target="_blank" rel="noopener">Google Maps ↗</a></div>'
   +'<div class="box"><div class="box-h"><div class="box-ic">◈</div><h4>Kenapa Lingkungan Ini Penting</h4></div><p class="prose">'+esc(d.konteks)+'</p></div>'
   +'<div style="display:flex;gap:9px;flex-wrap:wrap">'
   +'<button class="btn btn-t btn-sm" onclick="toast(\'Permintaan site visit terkirim ke tim regional\')">Jadwalkan Site Visit</button>'
   +'<button class="btn btn-g btn-sm" onclick="toast(\'Permintaan peta plotting terkirim\')">Minta Peta Plotting Resmi</button></div>';
}

/* Panel Potensi Pasar: populasi provinsi + indikator arus/traffic yang diturunkan
   dari kategori titik-titik nyata di sekitar lahan (bukan angka lalu lintas karangan). */
const TRAF={
 'Transportasi':{w:3,l:'Simpul transportasi',d:'terminal, stasiun, pelabuhan, bandara, atau jalan arteri'},
 'Industri & Logistik':{w:3,l:'Kawasan industri & logistik',d:'arus pekerja harian dan lalu lintas barang'},
 'Komersial':{w:2,l:'Pusat perdagangan',d:'arus pengunjung dan transaksi harian'},
 'Pendidikan':{w:2,l:'Kampus & sekolah',d:'arus pelajar, mahasiswa, dan tenaga pengajar'},
 'Permukiman':{w:2,l:'Permukiman padat',d:'basis pasar akhir dan tenaga kerja'},
 'Pemerintahan':{w:1,l:'Pusat pemerintahan',d:'arus layanan publik'},
 'Wisata':{w:1,l:'Destinasi wisata',d:'arus pengunjung musiman'},
 'Kesehatan':{w:1,l:'Fasilitas kesehatan',d:'arus pasien dan pendamping'},
};
const ARTI={
 'Rumah Subsidi FLPP':'Kepadatan penduduk dan arus pekerja adalah penentu utama serapan rumah subsidi — makin besar basis penduduk berpenghasilan tetap di sekitarnya, makin cepat unit terjual.',
 'Perumahan Komersial Tapak':'Rumah tapak menyerap pasar dari penduduk kelas menengah di radius kota yang sama. Arus pekerja dan kedekatan ke simpul transportasi menjadi nilai jual utama.',
 'Ruko / Komersial Strip':'Ruko hidup dari lalu lintas harian. Makin tinggi arus orang yang melewati lokasi, makin tinggi nilai sewa dan harga jualnya.',
 'Mixed-Use Komersial':'Aset mixed-use menuntut arus pengunjung yang konsisten sepanjang hari — kombinasi penduduk sekitar, pekerja, dan pengunjung dari luar kawasan.',
 'Apartemen / Rusun TOD':'Hunian vertikal bergantung pada arus komuter. Kedekatan ke simpul transit menentukan tingkat hunian dan harga sewa.',
 'Gudang & Logistik Modern':'Gudang dinilai dari akses ke jalur distribusi dan kedekatan ke kawasan industri serta pelabuhan — bukan dari kepadatan penduduk.',
 'Kawasan Industri / Pabrik':'Kawasan industri butuh pasokan tenaga kerja dan jalur logistik. Basis penduduk usia produktif dan akses ke pelabuhan menjadi penentu.',
 'Kos-Kosan / Hunian Sewa':'Kos-kosan hidup dari arus pendatang — mahasiswa dan pekerja muda. Kedekatan ke kampus atau kawasan industri menentukan tingkat hunian.',
 'Kavling Matang / Tanah Investasi':'Kenaikan nilai kavling mengikuti pertumbuhan penduduk dan pembangunan infrastruktur di sekitarnya.',
 'Gerai Ritel Tunggal (Minimarket/Klinik/SPBU)':'Gerai ritel dinilai dari katchment harian — jumlah orang yang melewati atau tinggal dalam radius dekat lokasi.',
 'Agribisnis / Perkebunan':'Nilai lahan agribisnis ditentukan kesuburan dan akses ke jalur distribusi komoditas, bukan kepadatan penduduk.',
};

/* ============ REGISTRI SUMBER DATA & TANGGAL CUTOFF ============ */
const SRC={
 umk:{n:'Upah minimum kota/kabupaten (UMK) 2026',cut:'1 Januari 2026',ver:'Desember 2025',
      s:'Keputusan Gubernur per provinsi, dasar PP 49/2025',st:'part',
      ket:'8 kota/kabupaten terverifikasi; sisanya memakai UMP provinsi dan ditandai pada panel.'},
 pop:{n:'Jumlah penduduk',cut:'Proyeksi pertengahan 2026',ver:'6 Februari 2026',
      s:'BPS — proyeksi berbasis Sensus Penduduk 2020 & SUPAS 2025',st:'part',
      ket:'Angka provinsi tersedia untuk 8 provinsi; angka kota untuk 3 kota.'},
 kelas:{n:'Komposisi kelas ekonomi',cut:'Tahun data 2025',ver:'2026',
      s:'BPS diolah Mandiri Institute, klasifikasi Bank Dunia',st:'ok',
      ket:'Bersifat nasional, bukan per kota.'},
 flpp:{n:'Batas harga & syarat rumah subsidi FLPP',cut:'Berlaku 2026',ver:'Juli 2026',
      s:'Kementerian PU/PR — skema FLPP 2026',st:'ok',ket:''},
 pasar:{n:'Benchmark pasar properti',cut:'Semester I 2026',ver:'Juli 2026',
      s:'Riset pasar properti nasional 2026',st:'ok',
      ket:'Okupansi gudang modern 97,4%; rumah tapak 62,4% pencarian; ruko yield sewa 6–10%; kavling capital gain 10–15%/thn.'},
 psn:{n:'Rencana pengembangan wilayah',cut:'RPJMN 2025–2029',ver:'Juli 2026',
      s:'Perpres 12/2025 (77 Proyek Strategis Nasional) & pengumuman pemda',st:'ok',ket:''},
 znt:{n:'Nilai lahan indikatif',cut:'Data internal Juli 2026',ver:'26 Juli 2026',
      s:'Zona Nilai Tanah, data internal Perumnas',st:'ok',
      ket:'Bukan harga transaksi. Harga final ditetapkan setelah appraisal KJPP.'},
 cari:{n:'Volume pencarian kata kunci',cut:'—',ver:'—',
      s:'Belum tersedia',st:'wait',
      ket:'Memerlukan alat riset kata kunci (Google Keyword Planner / Adspirer / Ahrefs) yang belum terhubung ke prototipe ini.'},
};
const CUTOFF='26 Juli 2026';
const STLBL={ok:['Terverifikasi','#1E9E5A'],part:['Sebagian terverifikasi','#D98A0B'],wait:['Menunggu data','#D14343']};
function srcBadge(key){
  const s=SRC[key],l=STLBL[s.st];
  return '<span class="src-b" style="border-color:'+l[1]+'44;color:'+l[1]+'" title="'+esc(s.s)+'">'
   +'<i style="background:'+l[1]+'"></i>'+esc(s.cut)+'</span>';
}
function kotaOf(d){return d.kota||d.prov}
function kotaData(d){
  const k=kotaOf(d);
  return {
    kota:k,
    pop:d.kota_populasi_juta != null ? Number(d.kota_populasi_juta) : null,
    umk:d.kota_umk != null ? Number(d.kota_umk) : null,
    vp:Number(d.kota_vp||0),
    vu:Number(d.kota_vu||0),
    note:d.kota_catatan||'',
    src:'kota',
    tier:Number(d.prov_tier||0)
  };
}
function dayaBeli(umk){
  if(!umk) return ['Perlu verifikasi',0,'#5B6B7F','upah minimum daerah belum terverifikasi'];
  if(umk>=5.5e6) return ['Sangat Tinggi',95,'#0E9F8E','setara wilayah upah tertinggi nasional'];
  if(umk>=4.5e6) return ['Tinggi',76,'#1E9E5A','di atas rata-rata nasional'];
  if(umk>=3.2e6) return ['Menengah',55,'#D98A0B','sekitar rata-rata nasional'];
  return ['Menengah Bawah',34,'#9BB7D4','di bawah rata-rata nasional'];
}

/* Komposisi kelas ekonomi nasional 2025 (BPS diolah Mandiri Institute, standar Bank Dunia) */
const EKON=[['Kelas atas',0.4,'#1B4FA8'],['Kelas menengah',16.6,'#2F6FD0'],
            ['Menuju kelas menengah',50.4,'#4E8FD0'],['Rentan & miskin',32.6,'#9BB7D4']];

/* Fokus insight menyesuaikan jenis peruntukan */
const FOKUS={
 'Rumah Subsidi FLPP':'hunian','Perumahan Komersial Tapak':'hunian','Apartemen / Rusun TOD':'hunian',
 'Kos-Kosan / Hunian Sewa':'hunian','Gudang & Logistik Modern':'industri','Kawasan Industri / Pabrik':'industri',
 'Ruko / Komersial Strip':'komersial','Mixed-Use Komersial':'komersial',
 'Gerai Ritel Tunggal (Minimarket/Klinik/SPBU)':'komersial',
 'Kavling Matang / Tanah Investasi':'kavling','Agribisnis / Perkebunan':'kavling'};
const SEGMEN={
 'Rumah Subsidi FLPP':['MBR — Masyarakat Berpenghasilan Rendah','Penghasilan maksimal Rp6 juta/bulan, dibiayai KPR FLPP bunga tetap 6% dengan uang muka 1%. Kelompok "menuju kelas menengah" yang mencakup 50,4% penduduk adalah pasar inti produk ini — segmen terbesar di Indonesia.'],
 'Perumahan Komersial Tapak':['Kelas menengah','Kelas menengah mencakup 16,6% penduduk (±46,7 juta jiwa) — kelompok dengan kemampuan KPR komersial. Ditopang kelompok "menuju kelas menengah" 50,4% yang sebagian sudah mampu naik ke rumah non-subsidi.'],
 'Apartemen / Rusun TOD':['Kelas menengah urban & komuter','Menyasar 16,6% kelas menengah di kota besar, terutama pekerja komuter yang memprioritaskan waktu tempuh di atas luas bangunan.'],
 'Kos-Kosan / Hunian Sewa':['Pendatang: mahasiswa & pekerja muda','Segmen yang belum mampu membeli namun butuh hunian dekat kampus atau tempat kerja. Kelompok "menuju kelas menengah" 50,4% adalah penyewa terbesar.'],
 'Ruko / Komersial Strip':['Pelaku UMKM & konsumen harian','Kebangkitan UMKM mendorong permintaan ruko. Basis konsumsi datang dari gabungan kelas menengah (16,6%) dan menuju kelas menengah (50,4%) — total 67% penduduk.'],
 'Mixed-Use Komersial':['Kelas menengah & pengunjung kawasan','Menyasar konsumsi kelas menengah 16,6% ditambah arus pengunjung dari luar kawasan.'],
 'Gerai Ritel Tunggal (Minimarket/Klinik/SPBU)':['Konsumen harian semua lapisan','Ritel modern melayani seluruh lapisan; 67% penduduk (kelas menengah + menuju kelas menengah) adalah pembelanja rutinnya.'],
};
function ekonBar(){
  return '<div class="ek-bar">'+EKON.map(e=>'<i style="width:'+e[1]+'%;background:'+e[2]+'" title="'+e[0]+' '+e[1]+'%"></i>').join('')+'</div>'
   +'<div class="ek-leg">'+EKON.map(e=>'<span><i style="background:'+e[2]+'"></i>'+esc(e[0])+' <b>'+String(e[1]).replace('.',',')+'%</b></span>').join('')+'</div>';
}
/* Tema pencarian pasar per jenis peruntukan. Disusun dari riset perilaku pencarian properti
   nasional 2026 — bukan volume pencarian aktual (butuh alat keyword yang belum terhubung). */
const CARI={
 'Rumah Subsidi FLPP':{h:'Yang dicari calon pembeli di area ini',
  kw:[['rumah subsidi '+'{kota}','sangat tinggi'],['rumah murah {kota}','sangat tinggi'],
      ['perumahan KPR {kota}','tinggi'],['rumah dijual {kota}','tinggi'],
      ['rumah DP 1 juta','tinggi'],['rumah dekat stasiun {kota}','sedang']],
  ins:'Rumah tapak mendominasi 62,4% pencarian properti nasional — porsi terbesar dibanding apartemen maupun tanah kavling. Pencarian rumah subsidi bersifat musiman mengikuti pembukaan kuota FLPP, dan paling ramai pada awal tahun anggaran.',
  peluang:['Perumahan subsidi FLPP','Perumahan sederhana non-subsidi','Ruko kecil pendukung kawasan','Minimarket & warung kelontong']},
 'Perumahan Komersial Tapak':{h:'Yang dicari calon pembeli di area ini',
  kw:[['rumah dijual {kota}','sangat tinggi'],['perumahan baru {kota}','tinggi'],
      ['cluster {kota}','tinggi'],['rumah 2 lantai {kota}','sedang'],
      ['rumah dekat tol {kota}','sedang'],['tanah kavling {kota}','sedang']],
  ins:'Rumah tapak adalah segmen paling banyak dicari secara nasional (62,4% pencarian) dengan return 3–7% per tahun. Pencari di segmen ini paling sensitif terhadap akses jalan dan jarak ke tempat kerja.',
  peluang:['Cluster rumah tapak menengah','Townhouse skala kecil','Ruko pendukung kawasan','Kavling siap bangun']},
 'Apartemen / Rusun TOD':{h:'Yang dicari calon pembeli di area ini',
  kw:[['apartemen dekat stasiun','tinggi'],['sewa apartemen {kota}','tinggi'],
      ['apartemen murah {kota}','sedang'],['hunian dekat MRT/KRL','sedang'],
      ['kos eksklusif {kota}','sedang']],
  ins:'Pencarian hunian vertikal terpusat pada kedekatan ke transportasi massal, bukan luas unit. Minat beli apartemen melandai secara nasional, sementara pencarian sewa tetap kuat — model sewa layak dipertimbangkan.',
  peluang:['Apartemen sewa / serviced','Rusun karyawan','Ritel & F&B lantai dasar','Co-working & klinik']},
 'Kos-Kosan / Hunian Sewa':{h:'Yang dicari penyewa di area ini',
  kw:[['kos dekat kampus {kota}','sangat tinggi'],['kos bulanan {kota}','sangat tinggi'],
      ['kontrakan {kota}','tinggi'],['kos karyawan {kota}','tinggi'],
      ['kos AC kamar mandi dalam','sedang']],
  ins:'Permintaan hunian sewa datang dari pendatang — mahasiswa dan pekerja muda — dan relatif tidak terpengaruh siklus properti. Kos-kosan mencatat yield tertinggi di sektor properti 2026.',
  peluang:['Kos eksklusif kamar mandi dalam','Rumah kontrakan petak','Laundry & warung makan','Minimarket']},
 'Ruko / Komersial Strip':{h:'Yang dicari pelaku usaha di area ini',
  kw:[['ruko dijual {kota}','tinggi'],['sewa ruko {kota}','sangat tinggi'],
      ['tempat usaha {kota}','tinggi'],['kios strategis {kota}','sedang'],
      ['ruko pinggir jalan raya','sedang']],
  ins:'Kebangkitan UMKM mendorong permintaan ruko dengan return sewa 6–10% per tahun. Pencarian didominasi kata kunci sewa, bukan beli — indikasi pasar penyewa lebih tebal daripada pembeli.',
  peluang:['Ruko 2 lantai','Kios & food court','Minimarket berjejaring','Klinik / apotek','Bengkel & cuci mobil']},
 'Mixed-Use Komersial':{h:'Yang dicari pelaku usaha & institusi di area ini',
  kw:[['rumah sakit terdekat {kota}','sangat tinggi'],['klinik 24 jam {kota}','tinggi'],
      ['sewa ruko {kota}','tinggi'],['tempat usaha strategis {kota}','tinggi'],
      ['apotek {kota}','sedang'],['kantor disewakan {kota}','sedang']],
  ins:'Kawasan dengan konsentrasi pekerja tinggi menghasilkan permintaan berlapis: layanan kesehatan, ritel harian, dan perkantoran pendukung. Pencarian fasilitas kesehatan adalah salah satu kebutuhan paling konsisten sepanjang tahun.',
  peluang:['Rumah sakit / klinik utama','Apotek & laboratorium','Ruko & kios ritel','Perkantoran sewa','Hotel bisnis']},
 'Gerai Ritel Tunggal (Minimarket/Klinik/SPBU)':{h:'Yang dicari konsumen di area ini',
  kw:[['minimarket terdekat','sangat tinggi'],['apotek terdekat','tinggi'],
      ['SPBU terdekat','tinggi'],['klinik terdekat {kota}','tinggi'],
      ['ATM terdekat','sedang']],
  ins:'Pencarian bernuansa "terdekat" adalah sinyal kebutuhan harian yang berulang setiap hari. Lokasi dengan katchment padat dan akses mudah bernilai premi bagi jaringan ritel modern.',
  peluang:['Minimarket berjejaring','Apotek & klinik pratama','SPBU / SPKLU','Kedai kopi & F&B cepat saji']},
 'Gudang & Logistik Modern':{h:'Yang dicari pelaku usaha di area ini',
  kw:[['sewa gudang {kota}','sangat tinggi'],['gudang dekat tol','tinggi'],
      ['pergudangan {kota}','tinggi'],['ekspedisi {kota}','sedang'],
      ['gudang siap pakai','sedang']],
  ins:'Pergudangan dan logistik adalah sektor properti terkuat 2026 dengan okupansi gudang modern nasional 97,4% — nyaris penuh. Pencarian didominasi kebutuhan sewa dari pelaku e-commerce, distribusi, dan manufaktur.',
  peluang:['Gudang sewa modern','Pusat distribusi e-commerce','Cold storage','Workshop & bengkel alat berat','Truck yard']},
 'Kawasan Industri / Pabrik':{h:'Yang dicari investor industri di area ini',
  kw:[['lahan industri {kota}','tinggi'],['kawasan industri {kota}','tinggi'],
      ['pabrik dijual {kota}','sedang'],['tanah dekat pelabuhan','sedang']],
  ins:'Minat investasi menguat pada manufaktur, logistik, dan industri berbasis ekspor. Sektor kendaraan listrik, energi terbarukan, dan pusat data menjadi pendorong permintaan lahan industri baru.',
  peluang:['Kavling industri siap bangun','Pabrik & perakitan','Pusat data','Energi terbarukan (PLTS)','Gudang pendukung']},
 'Kavling Matang / Tanah Investasi':{h:'Yang dicari investor di area ini',
  kw:[['tanah dijual {kota}','sangat tinggi'],['kavling murah {kota}','tinggi'],
      ['tanah SHM {kota}','tinggi'],['investasi tanah {kota}','sedang']],
  ins:'Tanah kavling mencatat capital gain tertinggi di antara produk properti — 10–15% per tahun — tanpa biaya perawatan. Pencarian menekankan legalitas (SHM) dan harga per meter.',
  peluang:['Kavling siap bangun','Kavling produktif / kebun','Land banking bertahap']},
 'Agribisnis / Perkebunan':{h:'Yang dicari pelaku usaha di area ini',
  kw:[['lahan perkebunan {kota}','sedang'],['tanah luas murah {kota}','sedang'],
      ['kebun dijual {kota}','sedang']],
  ins:'Lahan luas dengan harga per meter ekonomis memberi ruang imbal hasil berbasis komoditas dengan biaya masuk rendah.',
  peluang:['Perkebunan komoditas','Peternakan','Agrowisata']},
};
const LVW={'sangat tinggi':[96,'#0E9F8E'],'tinggi':[72,'#1E9E5A'],'sedang':[45,'#D98A0B']};
function cariPanel(d){
  const c=CARI[d.produk]; if(!c)return '';
  const kd=kotaData(d), kota=kd.kota.replace(/^(Kota|Kab\.)\s+/,'');
  const kw=c.kw.map(x=>[x[0].replace('{kota}',kota),x[1]]);
  return '<div class="box"><div class="box-h"><div class="box-ic">⌕</div><h4>'+esc(c.h)+'</h4>'
   +'<span class="src-wrap">'+srcBadge('cari')+'</span></div>'
   +'<div class="kw-warn">▲ <div><b>Volume pencarian asli belum tersedia.</b> Daftar di bawah adalah <b>perkiraan tingkat minat relatif antar kata kunci</b>, bukan angka pencarian per bulan. '
   +'Untuk menampilkan volume sungguhan (pencarian/bulan, tren 12 bulan, tingkat persaingan), alat riset kata kunci perlu dihubungkan lebih dulu.</div></div>'
   +'<div class="kw-list">'+kw.map(x=>{const l=LVW[x[1]];
     return '<div class="kw-r"><span class="kw-t">"'+esc(x[0])+'"</span>'
      +'<div class="kw-b est"><i style="width:'+l[0]+'%;background:'+l[1]+'"></i></div>'
      +'<span class="kw-l" style="color:'+l[1]+'">'+esc(x[1])+'</span>'
      +'<span class="kw-v">— /bln</span></div>'}).join('')+'</div>'
   +'<div class="kw-ins">◆ <div>'+esc(c.ins)+'</div></div>'
   +'<div class="pf-h" style="margin-top:16px">Jenis usaha yang cocok dikembangkan di sini</div>'
   +'<div class="kw-op">'+c.peluang.map(x=>'<span>'+esc(x)+'</span>').join('')+'</div>'
   +'<div class="pf-src"><b>Dasar penyusunan:</b> riset perilaku pencarian properti nasional, cutoff '+SRC.pasar.cut+' — '+esc(SRC.pasar.ket)+' '
   +'<b>Status volume pencarian: '+STLBL[SRC.cari.st][0]+'.</b> '+esc(SRC.cari.ket)+'</div></div>';
}
function profilPanel(d){
  const f=FOKUS[d.produk]||'kavling', pv=PROVDATA[d.prov]||{}, pois=poisOf(d).filter(x=>!x.g);
  const kd=kotaData(d), db=dayaBeli(kd.umk), ump=kd.umk;
  const akses=pois.filter(x=>x.c==='Transportasi'), indus=pois.filter(x=>x.c==='Industri & Logistik');
  let judul,ikon,isi;

  if(f==='hunian'){
    const sg=SEGMEN[d.produk]||['Hunian','—'];
    judul='Profil Pasar Hunian'; ikon='◉';
    isi='<div class="pf-seg"><div class="pf-sl">Segmen sasaran</div><div class="pf-sv">'+esc(sg[0])+'</div>'
      +'<div class="pf-sp">'+esc(sg[1])+'</div></div>'
      +'<div class="pf-h">Daya beli di '+esc(kd.kota)+'</div>'
      +'<div class="db-row"><div class="db-bar"><i style="width:'+db[1]+'%;background:'+db[2]+'"></i></div>'
      +'<div class="db-lbl" style="color:'+db[2]+'">'+esc(db[0])+'</div></div>'
      +'<div class="db-note">'+esc(db[3])+(kd.umk?' — upah minimum '+rpJt(kd.umk)+'/bulan':'')+'</div>'
      +'<div class="pf-h">Komposisi kelas ekonomi (acuan nasional)</div>'+ekonBar()
      +'<div class="pf-grid">'
      +'<div><div class="pf-l">Penduduk '+esc(kd.kota)+'</div><div class="pf-v">'+(kd.pop?idn(kd.pop,2)+'<small> juta jiwa</small>':'<span style="font-size:13px;color:var(--muted)">lihat catatan</span>')+'</div></div>'
      +'<div><div class="pf-l">Upah minimum 2026 · '+esc(kd.kota)+'</div><div class="pf-v">'+(kd.umk?rpJt(kd.umk)+'<small>/bulan</small>':'<span style="font-size:13px;color:var(--muted)">perlu verifikasi</span>')+'</div>'
      +'<div class="pf-s">'+esc(kd.note||'')+'</div></div>'
      +'<div><div class="pf-l">Batas penghasilan KPR subsidi</div><div class="pf-v">Rp 6 jt<small>/bulan</small></div></div>'
      +'</div>';
  } else if(f==='industri'){
    judul='Akses, Akomodasi & Rencana Pengembangan'; ikon='▬';
    isi='<div class="pf-grid">'
      +'<div><div class="pf-l">Titik akses terdata</div><div class="pf-v">'+akses.length+'<small> simpul</small></div>'
      +'<div class="pf-s">'+(akses.length?esc(akses.slice(0,2).map(x=>x.n.split(' (')[0]).join(' · ')):'dikonfirmasi survei')+'</div></div>'
      +'<div><div class="pf-l">Kawasan industri sekitar</div><div class="pf-v">'+indus.length+'<small> titik</small></div>'
      +'<div class="pf-s">'+(indus.length?esc(indus.slice(0,2).map(x=>x.n.split(' (')[0]).join(' · ')):'dikonfirmasi survei')+'</div></div>'
      +'<div><div class="pf-l">Biaya tenaga kerja · '+esc(kd.kota)+'</div><div class="pf-v">'+(kd.umk?rpJt(kd.umk)+'<small>/bulan</small>':'<span style="font-size:13px;color:var(--muted)">perlu verifikasi</span>')+'</div>'
      +'<div class="pf-s">'+esc(kd.note||'upah minimum 2026')+'</div></div>'
      +'</div>'
      +'<div class="pf-dev"><div class="pf-dl">◈ Rencana pengembangan '+esc(d.prov)+' — '+esc(DEVTIER[pv.devlv||0]||'—')+'</div>'
      +'<div class="pf-dp">'+esc(pv.dev||'Belum ada proyek pengembangan yang tercatat untuk wilayah ini.')+'</div></div>'
      +'<div class="pf-note2">Pergudangan dan logistik tercatat sebagai sektor properti terkuat 2026 dengan okupansi gudang modern nasional 97,4%. Yang menentukan nilai aset industri adalah akses jalur distribusi dan kedekatan ke kawasan produksi — bukan daya beli penduduk sekitar.</div>';
  } else if(f==='komersial'){
    const sg=SEGMEN[d.produk]||['Konsumen harian','—'];
    judul='Daya Beli & Basis Konsumen'; ikon='▥';
    isi='<div class="pf-seg"><div class="pf-sl">Segmen sasaran</div><div class="pf-sv">'+esc(sg[0])+'</div>'
      +'<div class="pf-sp">'+esc(sg[1])+'</div></div>'
      +'<div class="pf-h">Daya beli di '+esc(kd.kota)+'</div>'
      +'<div class="db-row"><div class="db-bar"><i style="width:'+db[1]+'%;background:'+db[2]+'"></i></div>'
      +'<div class="db-lbl" style="color:'+db[2]+'">'+esc(db[0])+'</div></div>'
      +'<div class="db-note">'+esc(db[3])+(kd.umk?' — upah minimum '+rpJt(kd.umk)+'/bulan':'')+'</div>'
      +'<div class="pf-h">Komposisi kelas ekonomi (acuan nasional)</div>'+ekonBar()
      +'<div class="pf-grid">'
      +'<div><div class="pf-l">Penduduk '+esc(kd.kota)+'</div><div class="pf-v">'+(kd.pop?idn(kd.pop,2)+'<small> juta jiwa</small>':'<span style="font-size:13px;color:var(--muted)">lihat catatan</span>')+'</div></div>'
      +'<div><div class="pf-l">Upah minimum 2026 · '+esc(kd.kota)+'</div><div class="pf-v">'+(kd.umk?rpJt(kd.umk)+'<small>/bulan</small>':'<span style="font-size:13px;color:var(--muted)">perlu verifikasi</span>')+'</div>'
      +'<div class="pf-s">'+esc(kd.note||'')+'</div></div>'
      +'</div>';
  } else {
    judul='Pertumbuhan Wilayah & Infrastruktur'; ikon='▢';
    isi='<div class="pf-grid">'
      +'<div><div class="pf-l">Penduduk '+esc(kd.kota)+'</div><div class="pf-v">'+(kd.pop?idn(kd.pop,2)+'<small> juta jiwa</small>':'<span style="font-size:13px;color:var(--muted)">lihat catatan</span>')+'</div></div>'
      +'<div><div class="pf-l">Status pengembangan</div><div class="pf-v" style="font-size:15px">'+esc(DEVTIER[pv.devlv||0]||'—')+'</div></div>'
      +'<div><div class="pf-l">Titik infrastruktur sekitar</div><div class="pf-v">'+pois.length+'<small> titik</small></div></div>'
      +'</div>'
      +'<div class="pf-dev"><div class="pf-dl">◈ Rencana pengembangan '+esc(d.prov)+'</div>'
      +'<div class="pf-dp">'+esc(pv.dev||'Belum ada proyek pengembangan yang tercatat untuk wilayah ini.')+'</div></div>'
      +'<div class="pf-note2">Kenaikan nilai kavling mengikuti pertumbuhan penduduk dan realisasi infrastruktur di sekitarnya. Tanah kavling mencatat capital gain 10–15% per tahun secara nasional.</div>';
  }
  return '<div class="box"><div class="box-h"><div class="box-ic">'+ikon+'</div><h4>'+judul+'</h4>'
   +'<span class="src-wrap">'+srcBadge('umk')+srcBadge('pop')+'</span></div>'+isi
   +'<div class="pf-src">Sumber: upah minimum 2026 per kota/kabupaten (Keputusan Gubernur, Desember 2025) · komposisi kelas ekonomi 2025 (BPS diolah Mandiri Institute, standar Bank Dunia) · penduduk kota mengacu data BPS. Angka kota hanya ditampilkan bila terverifikasi; sisanya memakai acuan provinsi dan ditandai pada catatan. Kondisi mikro di sekitar lahan dikonfirmasi saat survei.</div></div>';
}
function pasarPanel(d){
  const pv=PROVDATA[d.prov]||{}, pois=poisOf(d), kd=kotaData(d), db=dayaBeli(kd.umk);
  const kat={}; pois.forEach(x=>{if(!x.g)kat[x.c]=(kat[x.c]||0)+1});
  let skor=0; Object.keys(kat).forEach(k=>{if(TRAF[k])skor+=TRAF[k].w*Math.min(2,kat[k])});
  const lvl = skor>=8?['Sangat Tinggi',96,'#0E9F8E'] : skor>=5?['Tinggi',76,'#1E9E5A']
            : skor>=3?['Sedang',52,'#D98A0B'] : ['Berkembang',30,'#5B6B7F'];
  const rows=Object.keys(kat).filter(k=>TRAF[k]).sort((a,b)=>TRAF[b].w-TRAF[a].w).slice(0,4);
  return '<div class="box"><div class="box-h"><div class="box-ic">◉</div><h4>Potensi Pasar di Sekitar Lahan</h4>'
   +'<span class="src-wrap">'+srcBadge('umk')+srcBadge('psn')+'</span></div>'
   +'<div class="pas-top">'
   +'<div class="pas-c"><div class="pas-l">Daya Beli '+esc(kd.kota)+'</div>'
   +'<div class="pas-v" style="color:'+db[2]+';font-size:19px">'+esc(db[0])+'</div>'
   +'<div class="pas-s">'+(kd.umk?'upah minimum '+rpJt(kd.umk)+'/bulan':esc(db[3]))+'</div></div>'
   +'<div class="pas-c"><div class="pas-l">Arus & Aktivitas Sekitar</div>'
   +'<div class="pas-v" style="color:'+lvl[2]+'">'+lvl[0]+'</div>'
   +'<div class="pas-bar"><i style="width:'+lvl[1]+'%;background:'+lvl[2]+'"></i></div>'
   +'<div class="pas-s">dari '+pois.filter(x=>!x.g).length+' titik aktivitas terdata di sekitarnya</div></div>'
   +'<div class="pas-c"><div class="pas-l">Status Pengembangan Wilayah</div>'
   +'<div class="pas-v" style="font-size:15px">'+esc(DEVTIER[pv.devlv||0]||'—')+'</div>'
   +'<div class="pas-s">'+esc((pv.dev||'').slice(0,72))+((pv.dev||'').length>72?'…':'')+'</div></div></div>'
   +(rows.length?'<div class="pas-rows">'+rows.map(k=>
     '<div class="pas-r"><span class="pas-d" style="background:'+catColor(k)+'"></span>'
     +'<div><div class="pas-rn">'+esc(TRAF[k].l)+'</div><div class="pas-rd">'+esc(TRAF[k].d)+'</div></div>'
     +'<span class="pas-rc">'+kat[k]+' titik</span></div>').join('')+'</div>':'')
   +'<div class="pas-arti">◆ <div><b>Artinya untuk '+esc(d.produk)+':</b> '+esc(ARTI[d.produk]||'')+'</div></div>'
   +'<div class="pas-note">Daya beli mengacu upah minimum kota/kabupaten 2026. Tingkat arus &amp; aktivitas dihitung dari jenis dan jumlah titik aktivitas nyata di sekitar lahan — bukan hasil pengukuran lalu lintas kendaraan.</div></div>';
}
function paneRec(d){
  document.getElementById('p3').innerHTML=
   '<div class="kw-wrap"><div class="kw-im">'+kawasan(d)+'</div>'
   +'<div class="kw-cap"><div class="kw-t">Visioning Kawasan — '+esc(d.produk)+'</div>'
   +'<div class="kw-s">Ilustrasi konsep pengembangan, bukan rencana teknis. Bentuk akhir mengikuti desain dan perizinan Anda.</div></div></div>'
   +'<div class="box"><div class="box-h"><div class="box-ic">◆</div><h4>Peruntukan yang Direkomendasikan</h4></div>'
   +'<div class="rec"><div class="rec-c pri"><div class="rec-lbl">◆ Produk Utama</div><div class="rec-n">'+esc(d.produk)+'</div></div>'
   +'<div class="rec-c"><div class="rec-lbl">◇ Alternatif</div><div class="rec-n">'+esc(d.alt)+'</div>'
   +'<div style="font-size:11.5px;color:var(--muted);margin-top:8px">Opsi cadangan bila peruntukan utama tertahan izin.</div></div></div>'
   +'<div style="background:var(--bg);border-radius:9px;padding:14px">'
   +'<div style="font-size:10.5px;font-weight:750;text-transform:uppercase;letter-spacing:.6px;color:var(--muted);margin-bottom:7px">Mengapa produk ini?</div>'
   +'<p class="prose">'+esc(d.alasan)+'</p></div></div>'
   +pasarPanel(d)
   +profilPanel(d)
   +cariPanel(d)
   +'<div class="box"><div class="box-h"><div class="box-ic">▤</div><h4>Perkiraan Kapasitas Pengembangan</h4></div>'
   +'<p class="prose">'+esc(d.kapasitas)+'</p>'
   +'<div style="font-size:11.5px;color:var(--muted);margin-top:12px;background:var(--bg);padding:11px 13px;border-radius:8px;line-height:1.6">'
   +'Angka di atas adalah <b>estimasi awal</b> dari asumsi generik industri. Buka tab <b>Analisa Kelayakan</b> untuk menghitung ulang dengan asumsi Anda sendiri.</div></div>'
   +'<div style="display:flex;gap:9px;flex-wrap:wrap">'
   +'<button class="btn btn-t btn-sm" onclick="openBid(DATA.indexOf(d))">Ajukan Penawaran Harga</button>'
   +'<button class="btn btn-g btn-sm" onclick="toast(\'Permintaan konsultasi terkirim\')">Konsultasi Gratis</button></div>';
}

/* ---------- VISIONING ---------- */
const SCEN={
 'Rumah Subsidi FLPP':{icon:'⌂',unitLabel:'unit rumah',
  sl:[['eff','Efisiensi lahan (netto terjual)',40,75,60,'%','Sisanya untuk jalan, saluran, RTH, fasos'],
      ['kav','Luas kavling per unit',50,120,60,' m²','Makin kecil kavling, makin banyak unit'],
      ['harga','Harga jual per unit',120,240,166,' jt','Dibatasi cap FLPP pemerintah'],
      ['biaya','Biaya bangun + infrastruktur per unit',80,180,122,' jt','Rumah T-25 @Rp2,8 jt/m² + infra + overhead']]},
 'Perumahan Komersial Tapak':{icon:'⌂',unitLabel:'unit rumah',
  sl:[['eff','Efisiensi lahan (netto terjual)',40,75,60,'%','Sisanya untuk jalan, saluran, RTH, fasos'],
      ['kav','Luas kavling per unit',72,200,100,' m²','Kavling lebih besar = harga jual lebih tinggi'],
      ['harga','Harga jual per unit',350,2500,600,' jt','Rumah tapak: return 3–7%/thn, segmen paling likuid'],
      ['biaya','Biaya bangun per unit',150,900,290,' jt','T-45 @Rp5–7,5 jt/m² standar menengah']]},
 'Ruko / Komersial Strip':{icon:'▥',unitLabel:'unit ruko',
  sl:[['eff','Efisiensi lahan',45,80,65,'%','Sisanya untuk jalan & parkir'],
      ['kav','Kavling per unit ruko',54,150,75,' m²','Standar ruko 4×18 s/d 6×20 m'],
      ['harga','Harga jual per unit',600,4000,1400,' jt','Ruko: return sewa 6–10%/thn'],
      ['biaya','Biaya bangun per unit (2 lantai)',400,1600,825,' jt','150 m² @Rp5,5 jt/m²']]},
 'Mixed-Use Komersial':{icon:'▩',unitLabel:'unit komersial',
  sl:[['eff','Efisiensi lahan',45,80,65,'%','Sisanya sirkulasi & parkir'],
      ['kav','Kavling per unit',60,200,75,' m²',''],
      ['harga','Harga jual per unit',800,6000,1800,' jt',''],
      ['biaya','Biaya bangun per unit',500,2500,900,' jt','Standar menengah-atas']]},
 'Apartemen / Rusun TOD':{icon:'▤',unitLabel:'unit hunian',
  sl:[['klb','KLB (koefisien lantai bangunan)',10,60,25,'× 0,1','Total luas lantai ÷ luas lahan'],
      ['eff','Efisiensi bangunan (netto jual)',50,80,65,'%','Sisanya koridor, lift, lobi, MEP'],
      ['kav','Luas unit rata-rata',21,90,36,' m²',''],
      ['harga','Harga jual per unit',300,2500,650,' jt','⚠ Segmen apartemen melambat 2026 — jangan agresif'],
      ['biaya','Biaya bangun per unit',200,1500,420,' jt','Struktur bertingkat lebih mahal per m²']]},
 'Gudang & Logistik Modern':{icon:'▬',unitLabel:'m² GFA',rent:true,
  sl:[['kdb','KDB (luas bangunan ÷ luas lahan)',35,70,55,'%','Sisanya manuver truk, parkir, RTH'],
      ['sewa','Tarif sewa',50,110,70,' rb/m²/bln','Karawang ±Rp70 rb; Depok-Bogor-Jakarta ±Rp78 rb'],
      ['okup','Okupansi',70,100,95,'%','Okupansi gudang modern nasional 97,4%'],
      ['bangun','Biaya bangun gudang',2000,5000,3200,' rb/m²','Struktur baja + lantai beton']]},
 'Kawasan Industri / Pabrik':{icon:'▬',unitLabel:'m² kavling',
  sl:[['eff','Efisiensi kavling terjual',55,85,70,'%','Sisanya jalan, utilitas, IPAL, RTH'],
      ['uplift','Harga jual matang (× nilai dasar)',12,40,22,'× 0,1','Uplift dari pematangan & utilitas'],
      ['biaya','Biaya pematangan',150,700,350,' rb/m²','Cut & fill, jalan, drainase, listrik']]},
 'Kos-Kosan / Hunian Sewa':{icon:'▦',unitLabel:'kamar',rent:true,
  sl:[['kdb','KDB',40,70,55,'%',''],['lantai','Jumlah lantai',1,4,2,' lantai',''],
      ['kmr','Luas per kamar',15,36,24,' m²','Termasuk kamar mandi dalam'],
      ['sewa','Sewa per kamar',700,4000,1500,' rb/bln','Kos: yield tertinggi di sektor properti 2026'],
      ['okup','Okupansi',60,100,88,'%','']]},
 'Kavling Matang / Tanah Investasi':{icon:'▢',unitLabel:'m² kavling',
  sl:[['eff','Efisiensi kavling terjual',50,80,65,'%','Sisanya jalan & fasos'],
      ['uplift','Harga jual matang (× nilai dasar)',12,35,20,'× 0,1','Capital gain kavling nasional 10–15%/thn'],
      ['biaya','Biaya pematangan',100,600,250,' rb/m²','']]},
 'Gerai Ritel Tunggal (Minimarket/Klinik/SPBU)':{icon:'▣',unitLabel:'gerai',
  sl:[['luasg','Kebutuhan lahan per gerai',300,1200,600,' m²','Minimarket ±400–600 m²; SPBU lebih besar'],
      ['harga','Harga jual per gerai',800,8000,2500,' jt','Jaringan ritel membayar premi lokasi']]},
 'Agribisnis / Perkebunan':{icon:'❋',unitLabel:'Ha produktif',rent:true,
  sl:[['eff','Lahan produktif',60,95,85,'%',''],['hasil','Pendapatan bruto per Ha',15,120,45,' jt/thn',''],
      ['biaya','Biaya operasional',30,80,55,'%','Dari pendapatan bruto']]},
};
function capFLPP(d){
  const lo=(d.lokasi||'').toLowerCase();
  if(d.pulau==='Kalimantan')return 182;
  if(d.pulau==='Sulawesi')return 173;
  if(d.pulau==='Bali-Nusra')return 185;
  if(['pulogebang','kemayoran','malaka','rawalumbu','jonggol','lumpang','sektor ii','sektor iii','pondok indah','cibungbulang'].some(x=>lo.indexOf(x)>-1))return 185;
  if(['tanjung uban','tanjung pinang','nongsa','muka kuning'].some(x=>lo.indexOf(x)>-1))return 173;
  return 166;
}
function paneVis(d){
  const opts=[d.produk,d.alt].filter((v,i,a)=>v&&a.indexOf(v)===i&&SCEN[v]);
  if(!opts.length)opts.push(d.produk);
  document.getElementById('p4').innerHTML=
   '<div class="box" style="border-color:#DCD4FA;background:linear-gradient(140deg,#FBFAFF,#fff)">'
   +'<div class="box-h"><div class="box-ic" style="background:#F0EBFE">◈</div><h4>Simulator Analisa Kelayakan</h4></div>'
   +'<p class="prose" style="margin-bottom:14px">Anda tidak harus mengambil seluruh hamparan. Tentukan porsi lahan dan jumlah tahap, lalu geser asumsi di bawah untuk melihat dampaknya ke kapasitas, pendapatan, dan margin.</p>'
   +porsiCtl(d)
   +'<div class="vis-sw">'+opts.map(p=>'<button class="'+(p===ST.visProd?'on':'')+'" onclick="switchScen(\''+p.replace(/'/g,"\\'")+'\')">'+(SCEN[p]?SCEN[p].icon:'◆')+' '+esc(p)+'</button>').join('')+'</div>'
   +'<div class="sliders" id="sliders"></div><div class="vis-out" id="visOut"></div><div id="visWf"></div>'
   +'<div style="font-size:11.5px;color:var(--muted);line-height:1.6;background:var(--bg);padding:11px 13px;border-radius:8px;margin-top:6px">'
   +'<b>Template awal</b> disetel dari benchmark pasar 2026 pada skenario yang layak — silakan ubah sesuai asumsi Anda. '
   +'<b>⚠ Ini alat penyaringan, bukan studi kelayakan.</b> Belum memperhitungkan biaya perizinan, bunga pinjaman, pajak, RTRW, kondisi tanah, dan waktu serapan pasar. Angka riil bisa berbeda jauh.</div></div>'
   +'<div class="box"><div class="box-h"><div class="box-ic">◷</div><h4>Tahapan Transaksi</h4></div><div class="tl">'
   +'<div class="tl-s done"><div class="tl-t">1 · Minat & Survei</div><div class="tl-d">Bulan 0–1</div></div>'
   +'<div class="tl-s"><div class="tl-t">2 · Penawaran & Persetujuan Harga</div><div class="tl-d">Bulan 1–3</div></div>'
   +'<div class="tl-s"><div class="tl-t">3 · Akad & Serah Terima</div><div class="tl-d">Bulan 3–4</div></div></div>'
   +'<p style="font-size:11.5px;color:var(--muted);margin-top:14px">Estimasi umum. Durasi dapat berbeda tergantung kelengkapan dokumen dan skema yang dipilih.</p></div>'
   +'<div id="paySlot">'+paySim(d)+'</div>';
  buildSliders(d);
}
const UTUH=d=>(d.ha||0)<5;
function porsiCtl(d){
  if(UTUH(d)) return '<div class="porsi utuh"><div class="porsi-h"><div><div class="porsi-t">◆ Diambil seluruhnya</div>'
   +'<div class="porsi-s">Lahan di bawah 5 Ha ditawarkan sebagai satu kesatuan dan tidak dipecah</div></div>'
   +'<div class="porsi-v">'+idn(d.ha,2)+' Ha<small>100% hamparan'+((d.nilai>0)?' · '+rpM(d.nilai):'')+'</small></div></div></div>';
  const PR=[25,50,75,100], m2=(d.luas_m2||0)*ST.porsi/100, ha=(d.ha||0)*ST.porsi/100, nil=(d.nilai||0)*ST.porsi/100;
  return '<div class="porsi"><div class="porsi-h"><div><div class="porsi-t">Porsi lahan yang diambil</div>'
   +'<div class="porsi-s">Hamparan penuh '+idn(d.ha,2)+' Ha'+((d.nilai>0)?' · '+rpM(d.nilai):'')+'</div></div>'
   +'<div class="porsi-v">'+idn(ha,2)+' Ha<small>'+ST.porsi+'% dari hamparan'+((d.nilai>0)?' · '+rpM(nil):'')+'</small></div></div>'
   +'<div class="seg">'+PR.map(x=>'<button class="'+(ST.porsi===x?'on':'')+'" onclick="setPorsi('+x+')">'+x+'%</button>').join('')
   +'<span style="font-size:11.5px;color:var(--muted);align-self:center;margin-left:4px">atau atur bebas ↓</span></div>'
   +'<input type="range" min="10" max="100" step="5" value="'+ST.porsi+'" oninput="setPorsi(+this.value)" style="margin-bottom:14px">'
   +'<div class="porsi-h" style="border-top:1px solid var(--line);padding-top:13px"><div><div class="porsi-t">Diambil dalam berapa tahap?</div>'
   +'<div class="porsi-s">Tahap berikutnya dapat diambil setelah tahap sebelumnya berjalan</div></div></div>'
   +'<div class="seg">'+[1,2,3,4].map(x=>'<button class="'+(ST.tahap===x?'on':'')+'" onclick="setTahap('+x+')">'+(x===1?'Sekaligus':x+' tahap')+'</button>').join('')+'</div>'
   +(ST.tahap>1?tahapTbl(d,m2,nil):'')
   +'</div>';
}
function tahapTbl(d,m2,nil){
  const t=ST.tahap, per=m2/t, pn=nil/t;
  let s='<div class="tahap-tbl"><div class="tt-h"><span>Tahap</span><span>Luas</span>'+((d.nilai>0)?'<span>Nilai indikatif</span>':'<span></span>')+'<span>Perkiraan waktu</span></div>';
  for(let i=1;i<=t;i++)
    s+='<div class="tt-r"><span><b>Tahap '+i+'</b></span><span>'+idn(per/1e4,2)+' Ha</span>'
     +'<span>'+((d.nilai>0)?rpM(pn):'—')+'</span><span>'+(i===1?'Bulan 0–4':'Bulan '+((i-1)*12)+'–'+((i-1)*12+4))+'</span></div>';
  s+='</div><div class="porsi-note">Pembagian di atas rata per tahap. Pembagian sesuai klaster atau batas fisik tertentu dapat dibahas dengan tim.</div>';
  return s;
}
function setPorsi(v){if(UTUH(DATA[ST.sel]))return;ST.porsi=v;paneVis(DATA[ST.sel]);const ps=document.getElementById('paySlot');if(ps)ps.innerHTML=paySim(DATA[ST.sel])}
function setTahap(v){if(UTUH(DATA[ST.sel]))return;ST.tahap=v;paneVis(DATA[ST.sel]);const ps=document.getElementById('paySlot');if(ps)ps.innerHTML=paySim(DATA[ST.sel])}
function switchScen(p){ST.visProd=p;ST.visP={};paneVis(DATA[ST.sel])}
/* Kalibrasi template awal supaya skenario pembuka menunjukkan margin sehat (>=18%),
   dengan menyetel asumsi di dalam rentang slider. FLPP tidak pernah melewati cap pemerintah. */
/* Tuas penyetelan per produk: [nama slider, arah] — 'up' menaikkan, 'dn' menurunkan.
   Diurut dari yang paling wajar disetel lebih dulu. */
const LEVER={
 'Rumah Subsidi FLPP':[['harga','up'],['kav','dn'],['eff','up'],['biaya','dn']],
 'Perumahan Komersial Tapak':[['harga','up'],['kav','dn'],['eff','up'],['biaya','dn']],
 'Ruko / Komersial Strip':[['harga','up'],['kav','dn'],['eff','up'],['biaya','dn']],
 'Mixed-Use Komersial':[['harga','up'],['kav','dn'],['eff','up'],['biaya','dn']],
 'Apartemen / Rusun TOD':[['harga','up'],['klb','up'],['kav','dn'],['eff','up'],['biaya','dn']],
 'Gerai Ritel Tunggal (Minimarket/Klinik/SPBU)':[['harga','up'],['luasg','dn']],
 'Kawasan Industri / Pabrik':[['uplift','up'],['eff','up'],['biaya','dn']],
 'Kavling Matang / Tanah Investasi':[['uplift','up'],['eff','up'],['biaya','dn']],
 'Gudang & Logistik Modern':[['sewa','up'],['kdb','up'],['okup','up'],['bangun','dn']],
 'Kos-Kosan / Hunian Sewa':[['sewa','up'],['kdb','up'],['lantai','up'],['okup','up']],
 'Agribisnis / Perkebunan':[['hasil','up'],['eff','up'],['biaya','dn']],
};
const TARGET=18;   // margin kotor minimum untuk template awal (produk jual)
const TYIELD=12;   // yield kotor minimum untuk template awal (produk sewa)
function calib(d,sc,P){
  const key={}; sc.sl.forEach(s=>key[s[0]]=s);
  const m2=(d.luas_m2||0)*ST.porsi/100, land=(d.nilai||0)*ST.porsi/100;
  if(!m2||!land||!LEVER[P])return;
  const vals=()=>{const D={};sc.sl.forEach(s=>D[s[0]]=s[4]);return D};
  const score=()=>{const R=computeVis(d,P,vals(),m2);
    if(!R.rev)return -999;
    return R.rent ? R.rev/(land+R.cost)*100 : (R.rev-R.cost-land)/R.rev*100};
  const goal=()=>{const R=computeVis(d,P,vals(),m2);return R.rent?TYIELD:TARGET};
  // FLPP dibatasi cap harga pemerintah
  if(P==='Rumah Subsidi FLPP'&&key['harga']) key['harga'][3]=Math.min(key['harga'][3],capFLPP(d));
  LEVER[P].forEach(lv=>{
    const k=key[lv[0]]; if(!k)return;
    const step=Math.max(1,Math.round((k[3]-k[2])/60));
    let gd=0;
    while(score()<goal() && gd++<600){
      const nv=lv[1]==='up'?Math.min(k[3],k[4]+step):Math.max(k[2],k[4]-step);
      if(nv===k[4])break; k[4]=nv;
    }
  });
}
function buildSliders(d){
  const sc=SCEN[ST.visProd],el=document.getElementById('sliders');
  if(!sc){el.innerHTML='<p class="prose">Skenario simulasi belum tersedia untuk produk ini.</p>';document.getElementById('visOut').innerHTML='';return}
  sc.sl.forEach(s=>{if(s[7]===undefined)s[7]=s[4]; s[4]=s[7]});
  if(ST.visProd==='Rumah Subsidi FLPP'){const row=sc.sl.filter(s=>s[0]==='harga')[0];
    if(row){row[4]=Math.min(capFLPP(d),row[3]);row[6]='Cap FLPP wilayah ini: Rp'+capFLPP(d)+' jt/unit — batas maksimal pemerintah'}}
  if(Object.keys(ST.visP).length===0) calib(d,sc,ST.visProd);
  el.innerHTML=sc.sl.map(function(s){const k=s[0],v=ST.visP[k]!==undefined?ST.visP[k]:s[4];
    return '<div><div class="sl-h"><span>'+s[1]+'</span><b id="lb_'+k+'">'+fmtSl(k,v,s[5])+'</b></div>'
      +(s[6]?'<div class="sl-sub">'+s[6]+'</div>':'')
      +'<input type="range" min="'+s[2]+'" max="'+s[3]+'" value="'+v+'" oninput="ST.visP[\''+k+'\']=+this.value;document.getElementById(\'lb_'+k+'\').textContent=fmtSl(\''+k+'\',+this.value,\''+s[5]+'\');calcVis()"></div>'}).join('');
  calcVis();
}
function fmtSl(k,v,un){if(un==='× 0,1')return (v/10).toFixed(1).replace('.',',')+'×';return idn(v)+un}
function computeVis(d,P,D,m2){
  const sc=SCEN[P]; let cap=0,capL=sc.unitLabel,rev=0,cost=0,rent=false;
  if(P==='Rumah Subsidi FLPP'||P==='Perumahan Komersial Tapak'||P==='Ruko / Komersial Strip'||P==='Mixed-Use Komersial'){
    cap=Math.floor(m2*D.eff/100/D.kav);rev=cap*D.harga*1e6;cost=cap*D.biaya*1e6;
  }else if(P==='Apartemen / Rusun TOD'){
    cap=Math.floor(m2*(D.klb/10)*D.eff/100/D.kav);rev=cap*D.harga*1e6;cost=cap*D.biaya*1e6;
  }else if(P==='Gudang & Logistik Modern'){
    rent=true;cap=Math.round(m2*D.kdb/100);rev=cap*D.sewa*1e3*12*D.okup/100;cost=cap*D.bangun*1e3;
  }else if(P==='Kos-Kosan / Hunian Sewa'){
    rent=true;cap=Math.floor(m2*D.kdb/100*D.lantai/D.kmr);rev=cap*D.sewa*1e3*12*D.okup/100;cost=cap*D.kmr*4.5e6;
  }else if(P==='Kawasan Industri / Pabrik'||P==='Kavling Matang / Tanah Investasi'){
    cap=Math.round(m2*D.eff/100);rev=cap*d.znt*(D.uplift/10);cost=cap*D.biaya*1e3;
  }else if(P==='Gerai Ritel Tunggal (Minimarket/Klinik/SPBU)'){
    cap=Math.max(1,Math.floor(m2/D.luasg));rev=cap*D.harga*1e6;cost=cap*D.harga*1e6*.18;
  }else if(P==='Agribisnis / Perkebunan'){
    rent=true;cap=+(d.ha*D.eff/100).toFixed(2);rev=cap*D.hasil*1e6;cost=rev*D.biaya/100;
  }
  return {cap:cap,capL:capL,rev:rev,cost:cost,rent:rent};
}
function calcVis(){
  const d=DATA[ST.sel],sc=SCEN[ST.visProd],P=ST.visProd;
  const m2=(d.luas_m2||0)*ST.porsi/100, land=(d.nilai||0)*ST.porsi/100;
  const D={};sc.sl.forEach(function(s){D[s[0]]=ST.visP[s[0]]!==undefined?ST.visP[s[0]]:s[4]});
  const R=computeVis(d,P,D,m2), cap=R.cap, capL=R.capL, rev=R.rev, cost=R.cost, rent=R.rent;
  const profit=rev-cost-land,landPct=rev?land/rev*100:0,margin=rev?profit/rev*100:0;
  const out=[
    ['Kapasitas',idn(cap,capL==='Ha produktif'?2:0),capL+(ST.porsi<100?' · porsi '+ST.porsi+'%':''),false],
    [rent?'Pendapatan / Tahun':'Pendapatan Kotor',rpM(rev),rent?'sudah × okupansi':'total penjualan',false],
    ['Biaya Lahan',rpM(land),rent?(land/(rev||1)).toFixed(1).replace('.',',')+'× pendapatan setahun':landPct.toFixed(0)+'% dari pendapatan',false],
    [rent?'Investasi Bangunan':'Biaya Bangun',rpM(cost),rent?'sekali di awal':'total konstruksi',false]];
  if(rent){out.push(['Yield Kotor',(rev/(land+cost)*100).toFixed(1).replace('.',',')+'%','thd lahan + bangunan',true]);
    out.push(['Payback Kasar',((land+cost)/(rev||1)).toFixed(1).replace('.',',')+' thn','sebelum biaya operasional',true])}
  else{out.push(['Margin Kotor',margin.toFixed(0)+'%','setelah lahan & konstruksi',true]);
    out.push(['Laba Kotor',rpM(Math.max(0,profit)),profit<0?'⚠ negatif di asumsi ini':'sebelum pajak & bunga',true])}
  document.getElementById('visOut').innerHTML=out.map(o=>
    '<div class="vo '+(o[3]?'hl':'')+'"><div class="vo-l">'+o[0]+'</div><div class="vo-v">'+o[1]+'</div><div class="vo-s">'+o[2]+'</div></div>').join('');
  const mx=Math.max(rev,land+cost,1);
  const rows=rent?[['Pendapatan/thn',rev,'#1E9E5A'],['Biaya lahan',land,'#5B6B7F'],['Investasi bangunan',cost,'#D98A0B']]
    :[['Pendapatan',rev,'#1E9E5A'],['Biaya lahan',land,'#5B6B7F'],['Biaya bangun',cost,'#D98A0B'],['Laba kotor',Math.max(0,profit),profit<0?'#D14343':'#6B4EE6']];
  document.getElementById('visWf').innerHTML='<div class="wf">'
   +'<div style="font-size:10.5px;font-weight:750;text-transform:uppercase;letter-spacing:.6px;color:var(--muted);margin-bottom:10px">Struktur Angka</div>'
   +rows.map(r=>'<div class="wf-row"><span class="nm">'+r[0]+'</span><div class="wf-bar"><i style="width:'+Math.min(100,r[1]/mx*100)+'%;background:'+r[2]+'"></i></div><span class="amt">'+rpM(r[1])+'</span></div>').join('')
   +(!rent&&profit<0?'<div class="verdict v-bad" style="margin-top:12px"><span>▲</span><div><b>Belum menguntungkan di asumsi ini.</b> Coba naikkan harga jual, perkecil kavling untuk menambah unit, atau turunkan biaya bangun. Bila tetap negatif, pertimbangkan produk alternatif atau diskusikan skema kerja sama.</div></div>':'')
   +(!rent&&margin>0&&margin<15?'<div class="verdict v-warn" style="margin-top:12px"><span>◐</span><div><b>Margin tipis ('+margin.toFixed(0)+'%).</b> Umumnya pengembang mengincar margin kotor 20–30% agar aman terhadap kenaikan biaya. Perlu efisiensi desain atau pembahasan harga.</div></div>':'')
   +(!rent&&margin>=15?'<div class="verdict v-ok" style="margin-top:12px"><span>✓</span><div><b>Margin sehat ('+margin.toFixed(0)+'%).</b> Struktur angka di asumsi ini masuk untuk dilanjutkan ke kajian teknis dan pengecekan RTRW.</div></div>':'')
   +'</div>';
}

/* ================= PETA SEBARAN INDONESIA ================= */
const K=20.833;
const PRJ=(lon,lat)=>[(lon-94)*K,(7-lat)*K];
/* Garis pantai dihaluskan dengan Catmull-Rom yang dikonversi ke kurva bezier kubik,
   supaya poligon tidak terlihat patah-patah. */
function smoothPath(poly,t){
  const p=poly.map(c=>PRJ(c[0],c[1])), n=p.length, k=(t===undefined?0.42:t);
  if(n<3)return 'M'+p.map(q=>q[0].toFixed(1)+','+q[1].toFixed(1)).join(' L ')+' Z';
  let d='M'+p[0][0].toFixed(1)+','+p[0][1].toFixed(1);
  for(let i=0;i<n;i++){
    const p0=p[(i-1+n)%n], p1=p[i], p2=p[(i+1)%n], p3=p[(i+2)%n];
    const c1=[p1[0]+(p2[0]-p0[0])/6*k*1.6, p1[1]+(p2[1]-p0[1])/6*k*1.6];
    const c2=[p2[0]-(p3[0]-p1[0])/6*k*1.6, p2[1]-(p3[1]-p1[1])/6*k*1.6];
    d+=' C'+c1[0].toFixed(1)+','+c1[1].toFixed(1)+' '+c2[0].toFixed(1)+','+c2[1].toFixed(1)
      +' '+p2[0].toFixed(1)+','+p2[1].toFixed(1);
  }
  return d+' Z';
}
const MODES=[['lahan','Sebaran Lahan'],['pop','Potensi Penduduk'],['dev','Rencana Pengembangan']];
const POPC=['#5B6B7F','#7FB2D8','#4E8FD0','#2F6FD0','#1B4FA8'];
const DEVC=['#5B6B7F','#9BC79B','#5FAE72','#0E9F8E'];
function provStat(){
  const cnt={},ha={};
  DATA.forEach(d=>{cnt[d.prov]=(cnt[d.prov]||0)+1;ha[d.prov]=(ha[d.prov]||0)+(d.ha||0)});
  return {cnt:cnt,ha:ha};
}
function mkColor(pr){
  const p=PROVDATA[pr]||{};
  if(ST.mapMode==='pop')return POPC[p.tier||0];
  if(ST.mapMode==='dev')return DEVC[p.devlv||0];
  return '#0E9F8E';
}
function mkRadius(pr,c){
  if(ST.mapMode==='pop')return [7,9,11.5,14,16.5][(PROVDATA[pr]||{}).tier||0];
  if(ST.mapMode==='dev')return [7,9.5,12.5,15.5][(PROVDATA[pr]||{}).devlv||0];
  return c>10?15:c>=5?11.5:8.5;
}
function indoMap(){
  const S=provStat(), aktif=new Set(DATA.map(d=>d.pulau));
  let s='<svg viewBox="-16 -12 1032 400" xmlns="http://www.w3.org/2000/svg">'
   +'<defs>'
   +'<linearGradient id="seaG" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#0E3A56" stop-opacity=".35"/><stop offset="1" stop-color="#0B2540" stop-opacity=".15"/></linearGradient>'
   +'<linearGradient id="landA" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#7FE8D6" stop-opacity=".34"/><stop offset="1" stop-color="#2E9C8C" stop-opacity=".22"/></linearGradient>'
   +'<linearGradient id="landI" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#FFFFFF" stop-opacity=".12"/><stop offset="1" stop-color="#FFFFFF" stop-opacity=".05"/></linearGradient>'
   +'<filter id="landSh" x="-20%" y="-20%" width="140%" height="140%">'
   +'<feDropShadow dx="0" dy="2.5" stdDeviation="3.5" flood-color="#04121F" flood-opacity=".45"/></filter>'
   +'</defs>'
   +'<rect x="-16" y="-12" width="1032" height="400" fill="url(#seaG)"/>';
  // garis lintang/bujur tipis
  for(let lat=5;lat>=-10;lat-=5){const y=PRJ(94,lat)[1];
    s+='<line x1="-16" y1="'+y.toFixed(1)+'" x2="1016" y2="'+y.toFixed(1)+'" stroke="#fff" stroke-opacity=".055" stroke-width="1"/>'}
  for(let lon=100;lon<=140;lon+=10){const x=PRJ(lon,0)[0];
    s+='<line x1="'+x.toFixed(1)+'" y1="-12" x2="'+x.toFixed(1)+'" y2="388" stroke="#fff" stroke-opacity=".055" stroke-width="1"/>'}
  s+='<g filter="url(#landSh)">';
  Object.keys(ISLANDS).forEach(k=>{
    ISLANDS[k].forEach(poly=>{
      s+='<path class="isl'+(aktif.has(k)?' act':'')+'" d="'+smoothPath(poly)+'"/>';});});
  s+='</g>';
  Object.keys(S.cnt).sort((a,b)=>S.cnt[b]-S.cnt[a]).forEach(pr=>{
    const c=GEO[pr]; if(!c)return;
    const xy=PRJ(c[0],c[1]), r=mkRadius(pr,S.cnt[pr]), col=mkColor(pr), on=ST.prov===pr;
    const lbl=ST.mapMode==='lahan'?S.cnt[pr]:'';
    s+='<g class="mk'+(on?' on':'')+'" onclick="pickProv(\''+pr.replace(/'/g,"")+'\')" '
     +'onmouseenter="mapTip(event,\''+pr.replace(/'/g,"")+'\')" onmouseleave="mapTip(null)">'
     +'<circle class="h" cx="'+xy[0].toFixed(1)+'" cy="'+xy[1].toFixed(1)+'" r="'+(r+7)+'" style="fill:'+col+';stroke:'+col+'"/>'
     +'<circle class="b" cx="'+xy[0].toFixed(1)+'" cy="'+xy[1].toFixed(1)+'" r="'+r+'" style="fill:'+(on?'#FFC94F':col)+'"/>'
     +(lbl!==''?'<text x="'+xy[0].toFixed(1)+'" y="'+(xy[1]+3.6).toFixed(1)+'" text-anchor="middle" font-size="'+(r>13?12:r>10?10.5:9)+'">'+lbl+'</text>':'')
     +'</g>';});
  return s+'</svg><div class="idmap-tip" id="mapTip"></div>';
}
function mapTip(e,pr){
  const t=document.getElementById('mapTip'); if(!t)return;
  if(!e){t.classList.remove('on');return}
  const S=provStat(), p=PROVDATA[pr]||{};
  let x='<b>'+pr+'</b><br>'+S.cnt[pr]+' lahan · '+idn(S.ha[pr],1)+' Ha';
  if(ST.mapMode==='pop') x+='<br><span style="opacity:.75">Penduduk: '+(p.pop?idn(p.pop,2)+' juta jiwa':POPTIER[p.tier||0])+'</span>';
  if(ST.mapMode==='dev') x+='<br><span style="opacity:.75;white-space:normal;display:block;max-width:250px">'+(p.dev||'—')+'</span>';
  const box=document.getElementById('idmap').getBoundingClientRect();
  t.innerHTML=x;
  t.style.whiteSpace=ST.mapMode==='dev'?'normal':'nowrap';
  t.style.left=Math.max(4,Math.min(box.width-260,e.clientX-box.left+12))+'px';
  t.style.top=Math.max(4,e.clientY-box.top-52)+'px';
  t.classList.add('on');
}
function setMapMode(m){ST.mapMode=m;buildHero()}
function pickProv(pr){
  ST.prov=(ST.prov===pr?'':pr);
  document.getElementById('fPulau').value='';
  buildHero();render();
  document.getElementById('katalog').scrollIntoView({behavior:'smooth'});
  toast(ST.prov?'Menampilkan lahan di '+pr:'Menampilkan seluruh lahan');
}
function buildHero(){
  document.getElementById('idmap').innerHTML=indoMap();
  document.getElementById('mapModes').innerHTML=MODES.map(m=>
    '<button class="'+(ST.mapMode===m[0]?'on':'')+'" onclick="setMapMode(\''+m[0]+'\')">'+m[1]+'</button>').join('');
  const LG={
   lahan:'<span><i class="d1"></i>1–4 lahan</span><span><i class="d2"></i>5–10 lahan</span><span><i class="d3"></i>di atas 10 lahan</span><span style="margin-left:auto;opacity:.62">Posisi indikatif tingkat provinsi</span>',
   pop:POPTIER.slice(1).map((t,i)=>'<span><i style="background:'+POPC[i+1]+';width:'+(8+i*3)+'px;height:'+(8+i*3)+'px"></i>'+t+'</span>').join('')
     +'<span style="margin-left:auto;opacity:.62">Sumber: proyeksi BPS 2026</span>',
   dev:DEVTIER.slice(1).map((t,i)=>'<span><i style="background:'+DEVC[i+1]+';width:'+(9+i*3)+'px;height:'+(9+i*3)+'px"></i>'+t+'</span>').join('')
     +'<span style="margin-left:auto;opacity:.62">Arahkan kursor untuk detail proyek</span>'};
  document.getElementById('mapLegend').innerHTML=LG[ST.mapMode];
  const S=provStat(), cnt=S.cnt, ha=S.ha;
  const provs=Object.keys(cnt).sort((a,b)=>cnt[b]-cnt[a]);
  document.getElementById('imsList').innerHTML=
    '<div class="ims'+(ST.prov?'':' on')+'" onclick="ST.prov=\'\';buildHero();render()">'
    +'<div class="ims-n">Seluruh Wilayah<div class="ims-s">'+provs.length+' provinsi</div></div>'
    +'<div class="ims-c">'+DATA.length+'</div></div>'
    +provs.map(pr=>'<div class="ims'+(ST.prov===pr?' on':'')+'" onclick="pickProv(\''+pr.replace(/'/g,"")+'\')">'
      +'<div class="ims-n">'+esc(pr)+'<div class="ims-s">'+idn(ha[pr],1)+' Ha'+((PROVDATA[pr]&&PROVDATA[pr].pop)?' · '+idn(PROVDATA[pr].pop,1)+' jt jiwa':'')+'</div></div>'
      +'<div class="ims-c">'+cnt[pr]+'</div></div>').join('');
}

/* ================= WHY PERUMNAS BUSINESS SOLUTION ================= */
const WHY=[
 {ic:'⚖',t:'Satu penjual, satu akad',s:'Tanpa pembebasan lahan berkepanjangan',
  h:'Lahan dikuasai satu badan usaha',
  p:'',
  vis:'cmp',
  cmp:[['Akuisisi lahan konvensional',['Menemui puluhan pemilik satu per satu','Harga naik begitu rencana proyek diketahui','Menunggu kesepakatan seluruh ahli waris','Satu penolak bisa menahan seluruh proyek','Berbulan sampai bertahun sebelum akad']],
       ['Lewat Perumnas Business Solution',['Satu counterpart untuk seluruh hamparan','Harga ditetapkan lewat penilaian resmi','Riwayat penguasaan terdokumentasi','Tidak ada pihak yang bisa menyandera proses','Langsung masuk pembahasan harga dan skema']]]},
 {ic:'◈',t:'Menempel kawasan terbangun',s:'Infrastruktur dasar dan pasar sudah ada',
  h:'Sebagian besar lahan berada di dalam atau berbatasan dengan kawasan Perumnas yang sudah dihuni',
  p:'Membuka kawasan dari nol berarti membangun jalan masuk, jaringan air, listrik, dan menunggu pasar terbentuk. Lahan yang menempel kawasan eksisting memotong sebagian besar beban itu — jalan sudah ada, utilitas sudah lewat, dan calon pembeli sudah tinggal di sekitarnya.',
  vis:'bars',
  bars:[['Akses jalan','sudah tersedia',92],['Jaringan utilitas','sudah melintas',85],['Pasar penghuni','sudah terbentuk',88],['Pengenalan lokasi','sudah dikenal',95]],
  note:'Ketersediaan aktual per bidang dikonfirmasi saat site visit.'},
 {ic:'◉',t:'Solusi kebutuhan bisnis Anda',s:'Bukan sekadar menjual tanah',
  h:'Kami mendampingi dari rencana bisnis sampai akad',
  p:'',
  vis:'value',
  val:[['⚖','Legalitas Aman','Aset badan usaha milik negara dengan riwayat penguasaan terdokumentasi.'],
       ['◎','Pra-FS Disediakan','Rekomendasi peruntukan, perkiraan kapasitas, konteks pasar, dan simulator kelayakan.'],
       ['◈','Terpercaya','Perum Perumnas, badan usaha milik negara di bidang perumahan. Harga ditetapkan lewat penilaian resmi.'],
       ['◉','Konsultasi Gratis','Diskusi rencana bisnis, pembahasan skema, sampai penyiapan paparan penawaran — tanpa biaya dan tanpa kewajiban melanjutkan.']]},
];
function buildWhy(){
  document.getElementById('whyNav').innerHTML=WHY.map((w,i)=>
    '<button class="wn'+(i===ST.why?' on':'')+'" onclick="ST.why='+i+';buildWhy()">'
    +'<div class="wn-ic">'+w.ic+'</div><div><div class="wn-t">'+esc(w.t)+'</div><div class="wn-s">'+esc(w.s)+'</div></div></button>').join('');
  const w=WHY[ST.why];
  let vis='';
  if(w.vis==='cmp'){
    vis='<div class="wb-vis"><div class="cmp2">'
     +'<div class="side bad"><div class="lbl">✕ '+esc(w.cmp[0][0])+'</div>'
     +w.cmp[0][1].map(x=>'<div class="stp"><i>✕</i><span>'+esc(x)+'</span></div>').join('')+'</div>'
     +'<div class="arw">→</div>'
     +'<div class="side good"><div class="lbl">✓ '+esc(w.cmp[1][0])+'</div>'
     +w.cmp[1][1].map(x=>'<div class="stp"><i>✓</i><span>'+esc(x)+'</span></div>').join('')+'</div></div></div>';
  } else if(w.vis==='bars'){
    vis='<div class="wb-vis"><div class="bars">'+w.bars.map(b=>
      '<div class="bar-r"><span class="bn">'+esc(b[0])+'</span><div class="bt"><i style="width:'+b[2]+'%"></i></div>'
      +'<span class="bv" style="font-size:11px;font-weight:600;color:var(--muted)">'+esc(b[1])+'</span></div>').join('')
      +'</div><div style="font-size:11px;color:var(--muted);margin-top:11px">'+esc(w.note||'')+'</div></div>';
  } else {
    vis='<div class="wb-vis" style="padding:0;background:none"><div class="valgrid">'
     +w.val.map(v=>'<div class="valc"><div class="valc-ic">'+v[0]+'</div><div class="valc-t">'+esc(v[1])+'</div><div class="valc-p">'+esc(v[2])+'</div></div>').join('')
     +'</div></div>';
  }
  document.getElementById('whyBody').innerHTML='<div class="wb-h">'+esc(w.h)+'</div>'+(w.p?'<div class="wb-p">'+esc(w.p)+'</div>':'<div style="height:16px"></div>')+vis
   +'<div style="display:flex;gap:10px;flex-wrap:wrap"><button class="btn btn-t btn-sm" onclick="document.getElementById(\'katalog\').scrollIntoView({behavior:\'smooth\'})">Lihat Katalog Lahan →</button>'
   +'<button class="btn btn-g btn-sm" onclick="toast(\'Formulir konsultasi akan terhubung ke CRM\')">Konsultasi Gratis</button></div>';
}

const ini=n=>n.split(' ').map(w=>w[0]).slice(0,2).join('');
/* ================= SUCCESS STORY (contoh ilustratif) ================= */
const STORIES=[
 {tag:'Gudang & Logistik',lok:'Koridor Industri Jawa Barat',prod:'Gudang & Logistik Modern',
  t:'Dari lahan kosong 8 Ha jadi gudang tersewa penuh dalam 14 bulan',
  q:'Yang membuat kami cepat memutuskan bukan harganya, tapi karena lahannya satu penjual. Biasanya kami habis setahun cuma untuk pembebasan.',
  w:'Andi Prasetyo',r:'Direktur Operasional, perusahaan logistik',c:'#5B6B7F',
  m:[['8 Ha','luas diambil'],['14 bln','sampai beroperasi'],['96%','okupansi tahun pertama']]},
 {tag:'Rumah Subsidi',lok:'Sumatera Selatan',prod:'Rumah Subsidi FLPP',
  t:'1.200 unit rumah subsidi dibangun bertahap dalam 3 klaster',
  q:'Kami ambil bertahap per klaster. Modal tidak tertahan di tanah, dan hasil penjualan klaster pertama dipakai untuk klaster berikutnya.',
  w:'Hendra Kusuma',r:'Komisaris, pengembang perumahan',c:'#7FB77E',
  m:[['12 Ha','3 tahap pengambilan'],['1.200','unit terbangun'],['3 thn','durasi proyek']]},
 {tag:'Ruko Komersial',lok:'Jawa Timur',prod:'Ruko / Komersial Strip',
  t:'32 unit ruko terjual habis sebelum konstruksi selesai',
  q:'Pra-FS yang mereka siapkan mempercepat kajian internal kami. Komite investasi cukup memvalidasi, tidak perlu riset dari nol.',
  w:'Lidya Wijaya',r:'Head of Development, grup properti',c:'#8C7BB5',
  m:[['1,4 Ha','luas diambil'],['32 unit','ruko 2 lantai'],['100%','terjual pra-selesai']]},
];
function buildSumber(){
  document.getElementById('cutTgl').textContent=CUTOFF;
  const order=['znt','umk','pop','kelas','flpp','pasar','psn','cari'];
  document.getElementById('srcTbl').innerHTML=
   '<div class="src-h"><span>Data</span><span>Cutoff</span><span>Sumber</span><span>Status</span></div>'
   +order.map(k=>{const s=SRC[k],l=STLBL[s.st];
     return '<div class="src-r"><div><div class="src-n">'+esc(s.n)+'</div>'
      +(s.ket?'<div class="src-k">'+esc(s.ket)+'</div>':'')+'</div>'
      +'<div><div class="src-c">'+esc(s.cut)+'</div>'
      +(s.ver!=='—'?'<div class="src-cv">diverifikasi '+esc(s.ver)+'</div>':'')+'</div>'
      +'<div class="src-s">'+esc(s.s)+'</div>'
      +'<div><span class="src-st" style="color:'+l[1]+'"><i style="background:'+l[1]+'"></i>'+l[0]+'</span></div></div>'}).join('');
}
function buildStories(){
  document.getElementById('ssGrid').innerHTML=STORIES.map(s=>{
    const fake={lokasi:s.lok,produk:s.prod,ha:1};
    return '<div class="ss"><div class="ss-im">'+kawasan(fake)+'<span class="ss-tag">'+esc(s.tag)+'</span></div>'
     +'<div class="ss-b"><div class="ss-loc">◈ '+esc(s.lok)+'</div><div class="ss-t">'+esc(s.t)+'</div>'
     +'<div class="ss-q">"'+esc(s.q)+'"</div>'
     +'<div class="ss-w"><div class="ss-av" style="background:'+s.c+'">'+ini(s.w)+'</div>'
     +'<div><div class="ss-wn">'+esc(s.w)+'</div><div class="ss-wr">'+esc(s.r)+'</div></div></div>'
     +'<div class="ss-m">'+s.m.map(x=>'<div><div class="k">'+esc(x[0])+'</div><div class="l">'+esc(x[1])+'</div></div>').join('')+'</div>'
     +'</div></div>'}).join('');
}

/* ================= SHORTLIST ================= */
function toggleSave(i){
  if(i===null||i===undefined)return;
  const k=ST.saved.indexOf(i);
  if(k>-1){ST.saved.splice(k,1);toast('Dihapus dari daftar tersimpan')}
  else{ST.saved.push(i);toast('Disimpan ke daftar Anda')}
  syncSave();render();if(ST.sel!==null)drSaveLabel();
}
function syncSave(){document.getElementById('saveN').textContent=ST.saved.length;document.getElementById('savePill').classList.toggle('on',ST.saved.length>0)}
function drSaveLabel(){const b=document.getElementById('drSaveBtn'),on=ST.saved.indexOf(ST.sel)>-1;
  b.textContent=on?'♥ Tersimpan':'♡ Simpan';b.style.borderColor=on?'#D14343':'';b.style.color=on?'#D14343':''}
const clearSaved=()=>{ST.saved=[];syncSave();render();closeSaved()};
function openSaved(){
  if(!ST.saved.length){toast('Belum ada lahan tersimpan — tekan ikon ♡ pada kartu');return}
  const ds=ST.saved.map(i=>DATA[i]);
  document.getElementById('savedSub').textContent=ds.length+' lahan tersimpan';
  document.getElementById('savedBody').innerHTML=
   ds.map((d,k)=>{const i=ST.saved[k];
    return '<div class="box" style="display:flex;gap:14px;align-items:center;padding:14px">'
     +'<div style="width:88px;height:62px;border-radius:8px;overflow:hidden;flex-shrink:0">'+photo(d,0)+'</div>'
     +'<div style="flex:1;min-width:0"><div style="font-size:14.5px;font-weight:720;margin-bottom:3px">'+esc(d.lokasi)+'</div>'
     +'<div style="font-size:11.5px;color:var(--muted)">'+esc(d.pulau)+' · '+idn(d.ha,2)+' Ha · '+rpM(d.nilai)+'</div>'
     +'<div style="font-size:11.5px;color:var(--teal-dk);font-weight:650;margin-top:3px">◆ '+esc(d.produk)+'</div></div>'
     +'<div style="display:flex;gap:7px;flex-shrink:0"><button class="btn btn-g btn-sm" onclick="closeSaved();openDr('+i+')">Detail</button>'
     +'<button class="btn btn-g btn-sm" onclick="toggleSave('+i+');openSaved()">✕</button></div></div>'}).join('')
   +'<div class="cta"><h4>Ajukan penawaran untuk beberapa lahan sekaligus</h4>'
   +'<p>Tim Marketing Retail dapat menyiapkan satu paparan gabungan untuk seluruh lahan tersimpan Anda.</p>'
   +'<div class="cta-b"><button class="btn btn-t" onclick="toast(\'Permintaan paparan gabungan terkirim\')">Minta Paparan Gabungan</button>'
   +'<button class="btn btn-g" onclick="closeSaved();openCompare()">Bandingkan Semua</button></div></div>';
  document.getElementById('ovS').classList.add('on');document.getElementById('drS2').classList.add('on');document.body.style.overflow='hidden';
}
const closeSaved=()=>{document.getElementById('ovS').classList.remove('on');document.getElementById('drS2').classList.remove('on');
  if(!document.getElementById('dr').classList.contains('on')&&!document.getElementById('drC').classList.contains('on'))document.body.style.overflow=''};

/* ================= SIMULASI SKEMA PEMBAYARAN ================= */
function paySim(d){
  if(!(d.nilai>0))return '';
  const dp=ST.dp,tn=ST.tenor,harga=d.nilai*ST.porsi/100/ST.tahap,um=harga*dp/100,sisa=harga-um,cicil=tn>0?sisa/tn:0;
  return '<div class="box"><div class="box-h"><div class="box-ic">◷</div><h4>Simulasi Skema Pembayaran</h4></div>'
   +(ST.porsi<100||ST.tahap>1?'<div class="note b" style="margin-bottom:14px">◆ <div>Simulasi ini untuk <b>'+(ST.tahap>1?'satu tahap':'porsi '+ST.porsi+'%')+'</b> — '+idn((d.ha||0)*ST.porsi/100/ST.tahap,2)+' Ha senilai '+rpM(d.nilai*ST.porsi/100/ST.tahap)+'.'+(ST.tahap>1?' Total '+ST.tahap+' tahap.':'')+'</div></div>':'')
   +'<p class="prose" style="margin-bottom:14px">Atur uang muka dan jangka waktu untuk melihat perkiraan angsuran. Angka di bawah <b>belum memperhitungkan bunga, pajak, dan biaya balik nama</b>; skema final ditetapkan dalam perjanjian.</p>'
   +'<div class="sim-slider"><div class="sl-h"><span>Uang muka</span><b>'+dp+'% · '+rpM(um)+'</b></div>'
   +'<input type="range" min="10" max="100" value="'+dp+'" oninput="ST.dp=+this.value;document.getElementById(\'paySlot\').innerHTML=paySim(DATA[ST.sel])"></div>'
   +'<div class="sim-slider" style="margin-top:14px"><div class="sl-h"><span>Jangka waktu pelunasan</span><b>'+(dp>=100?'lunas di muka':tn+' bulan')+'</b></div>'
   +'<input type="range" min="1" max="36" value="'+tn+'" '+(dp>=100?'disabled':'')+' oninput="ST.tenor=+this.value;document.getElementById(\'paySlot\').innerHTML=paySim(DATA[ST.sel])"></div>'
   +'<div class="sim-pay">'
   +'<div class="vo"><div class="vo-l">Harga Indikatif</div><div class="vo-v" style="font-size:17px">'+rpM(harga)+'</div></div>'
   +'<div class="vo"><div class="vo-l">Uang Muka</div><div class="vo-v" style="font-size:17px">'+rpM(um)+'</div><div class="vo-s">'+dp+'% dari harga</div></div>'
   +'<div class="vo"><div class="vo-l">Sisa Pembayaran</div><div class="vo-v" style="font-size:17px">'+rpM(sisa)+'</div></div>'
   +'<div class="vo hl"><div class="vo-l">'+(dp>=100?'Total Dibayar':'Angsuran / Bulan')+'</div><div class="vo-v" style="font-size:17px;color:var(--teal-dk)">'+rpM(dp>=100?harga:cicil)+'</div><div class="vo-s">'+(dp>=100?'sekali bayar':'selama '+tn+' bulan')+'</div></div></div>'
   +'<div style="display:flex;gap:9px;flex-wrap:wrap"><button class="btn btn-t btn-sm" onclick="openBid(ST.sel)">Ajukan Penawaran Harga</button>'
   +'<button class="btn btn-g btn-sm" onclick="toast(\'Permintaan pembahasan skema terkirim\')">Diskusikan Skema Lain</button></div></div>';
}

/* ================= DOKUMEN & LEGALITAS ================= */
const DOCS=[
 ['◈','Salinan bukti kepemilikan / sertipikat induk','Menunjukkan dasar penguasaan lahan oleh Perumnas. Nomor dan jenis hak disampaikan setelah NDA.'],
 ['⌖','Peta plotting & titik koordinat batas','Batas lahan resmi beserta luas terukur — dasar untuk verifikasi di lapangan.'],
 ['▤','Keterangan peruntukan / RTRW dari pemda','Konfirmasi resmi apakah rencana bisnis Anda sesuai zonasi setempat.'],
 ['◎','Laporan penilaian (appraisal) KJPP','Dasar penetapan harga jual. Menjelaskan metode dan pembanding yang dipakai.'],
 ['◆','Draf perjanjian (PPJB / perjanjian kerja sama)','Contoh klausul, termin pembayaran, dan kewajiban para pihak.'],
];
function paneDocs(d,i){
  const req=DOCREQ[i]||(DOCREQ[i]={});
  const nreq=Object.keys(req).filter(k=>req[k]).length;
  document.getElementById('p6').innerHTML=
   '<div class="note b">◈ <div><b>Status legalitas tidak ditampilkan terbuka.</b> Dokumen di bawah tersedia untuk calon mitra yang telah melalui tahap konsultasi awal. Tandai dokumen yang Anda butuhkan, tim Marketing Retail akan menyiapkannya.</div></div>'
   +'<div class="box"><div class="box-h"><div class="box-ic">▤</div><h4>Dokumen yang Dapat Diminta</h4>'
   +'<span style="margin-left:auto;font-size:11.5px;color:var(--muted);font-weight:650">'+nreq+' dari '+DOCS.length+' diminta</span></div>'
   +DOCS.map((x,k)=>'<div class="doc"><div class="doc-ic">'+x[0]+'</div>'
     +'<div class="doc-b"><div class="doc-n">'+esc(x[1])+'</div><div class="doc-m">'+esc(x[2])+'</div></div>'
     +'<button class="doc-s '+(req[k]?'req':'')+'" onclick="reqDoc('+i+','+k+')">'+(req[k]?'✓ Diminta':'+ Minta')+'</button></div>').join('')
   +'<div style="display:flex;gap:9px;flex-wrap:wrap;margin-top:16px">'
   +'<button class="btn btn-t btn-sm" onclick="sendDocs('+i+')">Kirim Permintaan Dokumen</button>'
   +'<button class="btn btn-g btn-sm" onclick="reqAll('+i+')">Pilih Semua</button></div></div>'
   +'<div class="box"><div class="box-h"><div class="box-ic">⚖</div><h4>Yang Perlu Anda Ketahui Sebelum Mengikat Diri</h4></div>'
   +'<div style="display:grid;gap:11px">'
   +[['Harga pada katalog bersifat indikatif','Harga final ditetapkan setelah penilaian dan persetujuan internal Perumnas.'],
     ['Kesesuaian peruntukan wajib dicek ke pemda','Rekomendasi produk pada situs ini belum memperhitungkan RTRW per bidang.'],
     ['Biaya peralihan menjadi beban pembeli','BPHTB, PPh, biaya notaris dan balik nama di luar harga lahan.'],
     ['Verifikasi fisik tetap diperlukan','Batas, kondisi tanah, dan penguasaan fisik dikonfirmasi saat site visit.']]
     .map(x=>'<div style="display:flex;gap:10px;align-items:flex-start"><span style="color:var(--amber);font-weight:800;flex-shrink:0">!</span>'
       +'<div><div style="font-size:13.2px;font-weight:680">'+esc(x[0])+'</div><div style="font-size:12px;color:var(--muted);margin-top:2px;line-height:1.5">'+esc(x[1])+'</div></div></div>').join('')
   +'</div></div>'
   +'<div class="box"><div class="box-h"><div class="box-ic">◉</div><h4>Narahubung</h4></div>'
   +'<p class="prose" style="margin-bottom:13px">Divisi Marketing Retail — Kantor Pusat Perum Perumnas menangani seluruh proses penawaran lahan ini, dari konsultasi awal sampai akad.</p>'
   +'<div style="display:flex;gap:9px;flex-wrap:wrap"><button class="btn btn-t btn-sm" onclick="toast(\'Permintaan jadwal konsultasi terkirim\')">Jadwalkan Konsultasi</button>'
   +'<button class="btn btn-g btn-sm" onclick="toast(\'Permintaan konsultasi terkirim\')">Konsultasi Gratis</button></div></div>';
}
function reqDoc(i,k){DOCREQ[i][k]=!DOCREQ[i][k];paneDocs(DATA[i],i)}
function reqAll(i){DOCS.forEach((x,k)=>DOCREQ[i][k]=true);paneDocs(DATA[i],i);toast('Semua dokumen dipilih')}
function sendDocs(i){
  const c=Object.keys(DOCREQ[i]||{}).filter(k=>DOCREQ[i][k]).length;
  if(!c){toast('Pilih dulu dokumen yang dibutuhkan');return}
  toast(c+' dokumen diminta — tim akan menghubungi Anda');
}

/* ================= LAHAN SERUPA ================= */
function similar(d){
  const i0=DATA.indexOf(d);
  const sc=DATA.map((x,i)=>({i:i,x:x,s:(x.produk===d.produk?3:0)+(x.pulau===d.pulau?2:0)
    -Math.min(2,Math.abs((x.ha||0)-(d.ha||0))/Math.max(1,d.ha||1))}))
    .filter(o=>o.i!==i0).sort((a,b)=>b.s-a.s).slice(0,3);
  if(!sc.length)return '';
  return '<div class="box"><div class="box-h"><div class="box-ic">◈</div><h4>Lahan Serupa Lainnya</h4></div>'
   +'<div class="similar">'+sc.map(o=>'<div class="sim-c" onclick="openDr('+o.i+')">'
     +'<div class="im">'+photo(o.x,0)+'</div><div class="bd"><div class="t">'+esc(o.x.lokasi)+'</div>'
     +'<div class="s">'+idn(o.x.ha,2)+' Ha · '+rpM(o.x.nilai)+'</div>'
     +'<div class="s" style="color:var(--teal-dk);font-weight:650;margin-top:2px">'+esc(o.x.produk)+'</div></div></div>').join('')+'</div></div>';
}

/* ================= MODAL PENAWARAN ================= */
function fmtRp(el){
  const v=el.value.replace(/\D/g,'');
  el.value=v?Number(v).toLocaleString('id-ID'):'';
  const d=DATA[ST.sel],ref=document.getElementById('bidRef');
  if(!d)return;
  const num=Number(v||0);
  if(!(d.nilai>0)){ref.textContent='Harga acuan sedang dalam penilaian.';return}
  if(!num){ref.textContent='Harga indikatif katalog: '+rpM(d.nilai);return}
  const dv=(num-d.nilai)/d.nilai*100;
  ref.textContent='Harga indikatif katalog '+rpM(d.nilai)+' — penawaran Anda '+(dv>=0?'+':'')+dv.toFixed(0)+'%';
  ref.style.color=dv<-20?'var(--red)':(dv<0?'var(--amber)':'var(--green)');
}
function openBid(i){
  ST.sel=i;const d=DATA[i];
  document.getElementById('bidLand').value=d.lokasi+' — '+idn(d.ha,2)+' Ha, '+d.pulau;
  const prods=[...new Set(DATA.map(x=>x.produk))].sort();
  document.getElementById('bidUse').innerHTML=prods.map(x=>'<option'+(x===d.produk?' selected':'')+'>'+esc(x)+'</option>').join('')+'<option>Lainnya</option>';
  document.getElementById('bidPrice').value='';document.getElementById('bidRef').textContent=(d.nilai>0?'Harga indikatif katalog: '+rpM(d.nilai):'Harga acuan sedang dalam penilaian.');
  document.getElementById('bidRef').style.color='';
  document.getElementById('mdBid').classList.add('on');document.body.style.overflow='hidden';
}
const closeBid=()=>{document.getElementById('mdBid').classList.remove('on');
  if(!document.getElementById('dr').classList.contains('on'))document.body.style.overflow=''};
function submitBid(){
  const price=document.getElementById('bidPrice').value.replace(/\D/g,'');
  const nm=document.getElementById('bidName').value.trim(),ct=document.getElementById('bidContact').value.trim();
  if(!price){toast('Isi dulu harga penawaran Anda');document.getElementById('bidPrice').focus();return}
  if(!nm||!ct){toast('Isi nama dan kontak agar tim bisa menghubungi Anda');document.getElementById(nm?'bidContact':'bidName').focus();return}
  BIDS[ST.sel]={price:Number(price),scheme:document.getElementById('bidScheme').value,name:nm};
  closeBid();toast('Penawaran terkirim — tim menghubungi Anda dalam 2 hari kerja');
  if(document.getElementById('p1').classList.contains('on'))paneSummary(DATA[ST.sel]);
}

document.addEventListener('keydown',e=>{
  if(e.key==='Escape'){closeLightbox();closeBid();closeDr();closeCompare();closeSaved()}
  if(document.getElementById('lightbox').classList.contains('on')){
    if(e.key==='ArrowRight')lbStep(1);
    if(e.key==='ArrowLeft')lbStep(-1);
  }
});

/* ---------- Lightbox: pratinjau foto lahan full-width & bisa di-zoom ---------- */
const LB={i:null,variant:0};
function openLightbox(i,variant){
  LB.i=i;LB.variant=variant||0;
  document.getElementById('lightbox').classList.add('on');
  document.body.style.overflow='hidden';
  lbRender();
}
function lbRender(){
  const d=DATA[LB.i]; if(!d)return;
  const url=d[FOTO_KEYS[LB.variant]];
  const stage=document.getElementById('lbStage');
  stage.classList.remove('zoomed');
  stage.scrollTop=0;stage.scrollLeft=0;
  stage.innerHTML = url
    ? '<img id="lbEl" src="'+esc(url)+'" alt="'+esc(VIEWS[LB.variant])+' — '+esc(d.lokasi)+'">'
    : photo(d,LB.variant);
  const el=stage.firstElementChild;
  if(el){el.id='lbEl';el.addEventListener('click',lbToggleZoom)}
  document.getElementById('lbCap').textContent=VIEWS[LB.variant]+' · '+d.lokasi+(url?'':' · ilustrasi (foto asli belum diunggah)');
}
function lbToggleZoom(){document.getElementById('lbStage').classList.toggle('zoomed')}
function lbStep(delta){
  if(LB.i===null)return;
  LB.variant=(LB.variant+delta+VIEWS.length)%VIEWS.length;
  lbRender();
}
function closeLightbox(){
  document.getElementById('lightbox').classList.remove('on');
  document.getElementById('lbStage').innerHTML='';
  LB.i=null;
  document.body.style.overflow = document.getElementById('dr').classList.contains('on') ? 'hidden' : '';
}
function initApp(){buildWhy();buildHero();buildStories();buildSumber();fill();buildPlans();render();syncCmp();syncSave();}
fetch('api/lahan.php').then(r=>r.json()).then(d=>{DATA=d;rebuildLocationIndexes();initApp();}).catch(err=>{
  console.error('Gagal memuat data lahan dari server:', err);
  document.body.insertAdjacentHTML('afterbegin','<div style="background:#FBEAEA;color:#8A2424;padding:12px 20px;font:600 13px Inter,sans-serif;text-align:center">Gagal memuat data lahan dari server. Pastikan database sudah terhubung.</div>');
  initApp();
});
</script>
</body>
</html>
