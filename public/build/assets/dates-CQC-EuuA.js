import{o as y,q as l,r as d,t as p,u as C,v as c,w as f,x as N,y as B,z as v,D as u,i as _,E as x,G as O,H as E,s as i,I as T,J as L,K as S,f as W,M as U,N as q,O as I,Q,R as Y,U as $,V as j,W as z,X,Y as G,Z as H,_ as V,$ as F,a0 as J,a1 as K,a2 as Z,a3 as ee,a4 as te,a5 as ae,a6 as se,a7 as ne,a8 as re,a9 as de,aa as le,ab as ie,ac as oe,ad as ge,ae as ue,af as ce,ag as we,ah as he,ai as ye,aj as be,ak as fe}from"./vendor-BN1MWPzx.js";const k="/",h=y.create({baseURL:k,withCredentials:!0});y.defaults.withCredentials=!0;y.defaults.baseURL=k;class R{getByName(e){return h.get("/api/v1/preferences/"+e)}getByNameNow(e){return h.get("/api/v1/preferences/"+e)}postByName(e,a){return h.post("/api/v1/preferences",{name:e,data:a})}}class A{post(e,a){return h.post("/api/v1/preferences",{name:e,data:a})}}function pe(t,e=null){return new R().getByName(t).then(s=>Promise.resolve(M(t,s))).catch(()=>{new A().post(t,e).then(o=>Promise.resolve(M(t,o)))})}function M(t,e){return e.data.data.attributes.data}function w(t,e=null){const a=window.store.get("cacheValid");if(a&&window.hasOwnProperty(t))return Promise.resolve(window[t]);const s=window.store.get(t);return a&&typeof s<"u"?Promise.resolve(s):new R().getByName(t).then(g=>Promise.resolve(m(t,g))).catch(g=>e===""?Promise.resolve(e):new A().post(t,e).then(P=>Promise.resolve(m(t,P))))}function m(t,e){let a=e.data.data.attributes.data;return window.store.set(t,a),a}function Me(t,e){let a,s;switch(t){case"last365":a=l(u(e,365)),s=d(e);break;case"last90":a=l(u(e,90)),s=d(e);break;case"last30":a=l(u(e,30)),s=d(e);break;case"last7":a=l(u(e,7)),s=d(e);break;case"YTD":a=v(e),s=d(e);break;case"QTD":a=p(e),s=d(e);break;case"MTD":a=c(e),s=d(e);break;case"1D":a=l(e),s=d(e);break;case"1W":a=l(N(e,{weekStartsOn:1})),s=d(B(e,{weekStartsOn:1}));break;case"1M":a=l(c(e)),s=d(f(e));break;case"3M":a=l(p(e)),s=d(C(e));break;case"6M":e.getMonth()<=5&&(a=new Date(e),a.setMonth(0),a.setDate(1),a=l(a),s=new Date(e),s.setMonth(5),s.setDate(30),s=d(a)),e.getMonth()>5&&(a=new Date(e),a.setMonth(6),a.setDate(1),a=l(a),s=new Date(e),s.setMonth(11),s.setDate(31),s=d(a));break;case"1Y":a=new Date(e),a.setMonth(0),a.setDate(1),a=l(a),s=new Date(e),s.setMonth(11),s.setDate(31),s=d(s);break}return{start:a,end:s}}let D=!1;function me(t){if(D===!1){const e=t.replace("-","_");D=!0;const a=7*24*60*60*1e3;return console.log('Will load language "'+e+'"'),_.use(x).init({load:"languageOnly",fallbackLng:"en",lng:e,debug:!1,backend:{backends:[O,E],backendOptions:[{load:"languageOnly",expirationTime:a},{loadPath:"./v2/i18n/{{lng}}.json"}]}})}return console.warn("Loading translations skipped."),Promise.resolve()}i.addPlugin(T);window.bootstrapped=!1;window.store=i;window.bootstrap=L;pe("lastActivity").then(t=>{const e=i.get("lastActivity");i.set("cacheValid",e===t),i.set("lastActivity",t),console.log("Server value: "+t),console.log("Local value:  "+e),console.log("Cache valid:  "+(e===t))}).then(()=>{Promise.all([w("viewRange"),w("darkMode"),w("locale"),w("language")]).then(t=>{if(!i.get("start")||!i.get("end")){const e=Me(t[0],new Date);i.set("start",e.start),i.set("end",e.end)}window.__localeId__=t[2],i.set("language",t[3]),i.set("locale",t[3]),me(t[3]).then(()=>{const e=new Event("firefly-iii-bootstrapped");document.dispatchEvent(e),window.bootstrapped=!0})})});window.axios=y;window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest";window.Alpine=S;const b={bg:U,cs:q,da:I,de:Q,el:Y,enGB:$,enUS:j,es:z,ca:X,fi:G,fr:H,hu:V,id:F,it:J,ja:K,ko:Z,nb:ee,nn:te,nl:ae,pl:se,ptBR:ne,pt:re,ro:de,ru:le,sk:ie,sl:oe,sv:ge,tr:ue,uk:ce,vi:we,zhTW:he,zhCN:ye};function r(t,e="PP"){let a=window.__localeId__.replace("_","");return W(t,e,{locale:b[a]??b[a.slice(0,2)]??b.enUS})}const ve=()=>({range:{start:null,end:null},defaultRange:{start:null,end:null},language:"en_US",init(){this.range={start:new Date(window.store.get("start")),end:new Date(window.store.get("end"))},this.defaultRange={start:new Date(window.store.get("start")),end:new Date(window.store.get("end"))},this.language=window.store.get("language"),this.locale=window.store.get("locale"),this.locale=this.locale==="equal"?this.language:this.locale,window.__localeId__=this.language,this.buildDateRange(),window.store.observe("start",t=>{this.range.start=new Date(t)}),window.store.observe("end",t=>{this.range.end=new Date(t),this.buildDateRange()})},buildDateRange(){let t=this.getNextRange(),e=this.getPrevRange(),a=this.lastDays(7),s=this.lastDays(30),o=this.mtd(),g=this.ytd(),n=document.getElementsByClassName("daterange-holder")[0];n.textContent=r(this.range.start)+" - "+r(this.range.end),n.setAttribute("data-start",r(this.range.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(this.range.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-current")[0],n.textContent=r(this.defaultRange.start)+" - "+r(this.defaultRange.end),n.setAttribute("data-start",r(this.defaultRange.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(this.defaultRange.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-next")[0],n.textContent=r(t.start)+" - "+r(t.end),n.setAttribute("data-start",r(t.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(t.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-prev")[0],n.textContent=r(e.start)+" - "+r(e.end),n.setAttribute("data-start",r(e.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(e.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-7d")[0],n.setAttribute("data-start",r(a.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(a.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-90d")[0],n.setAttribute("data-start",r(s.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(s.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-mtd")[0],n.setAttribute("data-start",r(o.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(o.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-ytd")[0],n.setAttribute("data-start",r(g.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(g.end,"yyyy-MM-dd"))},getNextRange(){let t=c(this.range.start),e=be(t,1),a=f(e);return{start:e,end:a}},getPrevRange(){let t=c(this.range.start),e=fe(t,1),a=f(e);return{start:e,end:a}},ytd(){let t=new Date;return{start:v(this.range.start),end:t}},mtd(){let t=new Date;return{start:c(this.range.start),end:t}},lastDays(t){let e=new Date;return{start:u(e,t),end:e}},changeDateRange(t){t.preventDefault();let e=t.currentTarget,a=new Date(e.getAttribute("data-start")),s=new Date(e.getAttribute("data-end"));return window.store.set("start",a),window.store.set("end",s),!1}});export{A as P,h as a,ve as d,w as g,m as p};
