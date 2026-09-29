<style>
:root{--navy:#0B2540;--navy-2:#123A5E;--teal:#0E9F8E;--teal-dk:#0A7A6D;--ink:#0F172A;--muted:#5B6B7F;
--line:#E3E9F0;--bg:#F6F8FB;--red:#D14343;
--f:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:var(--f);background:var(--bg);color:var(--ink);line-height:1.5}
a{color:inherit;text-decoration:none}
.topbar{background:var(--navy);color:#fff;padding:0 24px;height:60px;display:flex;align-items:center;gap:16px}
.topbar .logo{display:flex;align-items:center;gap:9px;font-weight:750;font-size:15px}
.logo-m{width:30px;height:30px;border-radius:8px;background:linear-gradient(135deg,var(--navy),var(--teal));display:grid;place-items:center;font-size:10px;font-weight:800}
.topbar nav{margin-left:20px;display:flex;gap:4px}
.topbar nav a{padding:8px 12px;border-radius:8px;font-size:13px;font-weight:600;color:rgba(255,255,255,.8)}
.topbar nav a:hover,.topbar nav a.on{background:rgba(255,255,255,.12);color:#fff}
.topbar .r{margin-left:auto;display:flex;align-items:center;gap:12px;font-size:12.5px;color:rgba(255,255,255,.75)}
.wrap{max-width:1180px;margin:0 auto;padding:26px 24px}
h1{font-size:22px;font-weight:750;letter-spacing:-.4px;margin-bottom:4px}
.sub{color:var(--muted);font-size:13.5px;margin-bottom:22px}
.btn{display:inline-flex;align-items:center;gap:6px;padding:9px 16px;border-radius:9px;font-size:13px;font-weight:650;border:1px solid var(--line);background:#fff;cursor:pointer}
.btn-p{background:var(--navy);color:#fff;border-color:var(--navy)}
.btn-p:hover{background:var(--navy-2)}
.btn-t{background:var(--teal);color:#fff;border-color:var(--teal)}
.btn-t:hover{background:var(--teal-dk)}
.btn-r{color:var(--red);border-color:#F3CDCD}
.btn-r:hover{background:#FBEAEA}
.btn-sm{padding:6px 11px;font-size:12px}
.card{background:#fff;border:1px solid var(--line);border-radius:14px;box-shadow:0 1px 2px rgba(11,37,64,.06),0 8px 24px rgba(11,37,64,.06)}
.toolbar{display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;gap:12px;flex-wrap:wrap}
table{width:100%;border-collapse:collapse;font-size:13px}
th,td{padding:11px 14px;text-align:left;border-bottom:1px solid var(--line);vertical-align:top}
th{background:#FAFBFD;font-size:11px;text-transform:uppercase;letter-spacing:.4px;color:var(--muted);font-weight:700}
tr:hover td{background:#FAFBFD}
.actions{display:flex;gap:6px;white-space:nowrap}
.flash{background:#E4F5EB;color:#0E5D34;padding:11px 15px;border-radius:9px;font-size:13px;font-weight:600;margin-bottom:18px}
.flash.err{background:#FBEAEA;color:#8A2424}
form.grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
form.grid .full{grid-column:1/-1}
label{display:block;font-size:12.5px;font-weight:650;margin-bottom:6px}
input,select,textarea{width:100%;padding:10px 12px;border:1px solid var(--line);border-radius:9px;background:var(--bg);font-size:13.5px;font-family:inherit;outline:none}
input:focus,select:focus,textarea:focus{border-color:var(--teal);background:#fff}
textarea{resize:vertical;min-height:70px}
.form-actions{grid-column:1/-1;display:flex;gap:10px;margin-top:6px}
.empty{padding:40px;text-align:center;color:var(--muted)}
</style>
