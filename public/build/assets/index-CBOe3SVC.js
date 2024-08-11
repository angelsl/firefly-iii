import{a as x,g as E,d as L}from"./dates-BuFpeg-W.js";import{i as m,f as v}from"./vendor-ldojvSjw.js";import{f as D}from"./format-money-C9cJykQv.js";import{s as f,G as K}from"./get-DLtzz4Wp.js";class T{put(e,i){return x.put("/api/v2/accounts/"+e,i)}}class U{renderUrl(e,i,a){return`<a href="${e}" title="${i}">${a}</a>`}}class F{renderField(e,i){if(e==="name")return this.renderName(i)}renderName(e){return new U().renderUrl("./accounts/show/"+e.id.toString(),e.name,e.name)}}function S(){console.log("showInternalsButton"),document.querySelector(".toggle-page-internals").classList.remove("d-none")}function V(){document.querySelector(".toggle-page-wizard").classList.remove("d-none")}function N(t){let e=Promise.resolve(),i=[];for(let a=0;a<t.length;a++){let u=t[a],l=u.name,r=u.default;e=e.then(()=>E(l,r).then(s=>(i.push(s),Promise.resolve(i))))}return e}function M(t,e,i){function a(b,A){return b===A?'<li class="page-item active" aria-current="page"><a class="page-link" href="#" @click.prevent="goToPage('+b+')">'+b+"</a></li>":'<li class="page-item"><a class="page-link" href="#"  @click.prevent="goToPage('+b+')">'+b+"</a></li>"}let u=e||1,l=5,r=u,s=1,d=u,o=l+1,n=l+1,h="",c="",p=1,_="";for(;;)if(o>=n?(h+=a(s,e),s+=p,o--):(c=a(d,e)+c,r=d,d-=p,n--),n===0&&(p*=25,s+=p-1,s-=s%p,d-=d%p,o=l,n=l),s>d){if(_+=h+c,r>u||u>=t)break;r=t,s=u+1,d=t,o=l,n=l+1,h="",c="",p=1}return _}function j(t,e,i){t=parseInt(t),e=parseInt(e);let a='<nav aria-label="Page navigation">';return a+='<ul class="pagination">',e>1&&(a+='<li class="page-item"><a class="page-link" href="#">Previous</a></li>'),e===1&&(a+='<li class="page-item disabled"><a class="page-link">Previous</a></li>'),a+=M(t,e),e!==t&&(a+='<li class="page-item"><a class="page-link" href="#">Next</a></li>'),e===t&&(a+='<li class="page-item disabled"><a class="page-link">Next</a></li>'),a+="</ul></nav>",a}const B=window.location.href.split("?"),w=B[0].split("/"),g=w[w.length-1];let P="",I="",k=1;const y=new Proxy(new URLSearchParams(window.location.search),{get:(t,e)=>t.get(e)});P=y.column??"";I=y.direction??"";k=parseInt(y.page??1);S();V();let R=function(){return{notifications:{error:{show:!1,text:"",url:""},success:{show:!1,text:"",url:""},wait:{show:!1,text:""}},totalPages:1,page:1,pageUrl:"",filters:{active:null,name:null},pageOptions:{isLoading:!0,groupedAccounts:!0,sortingColumn:P,sortDirection:I},tableColumns:{drag_and_drop:{visible:!0,enabled:!0},active:{visible:!0,enabled:!0},name:{visible:!0,enabled:!0},type:{visible:g==="asset",enabled:!0},liability_type:{visible:g==="liabilities",enabled:!0},liability_direction:{visible:g==="liabilities",enabled:!0},liability_interest:{visible:g==="liabilities",enabled:!0},number:{visible:!0,enabled:!0},current_balance:{visible:g!=="liabilities",enabled:!0},amount_due:{visible:g==="liabilities",enabled:!0},last_activity:{visible:!0,enabled:!0},balance_difference:{visible:!0,enabled:!0},menu:{visible:!0,enabled:!0}},editors:{},accounts:[],lastClickedFilter:"",lastFilterInput:"",goToPage(t){this.page=t,this.loadAccounts()},applyFilter(){this.filters[this.lastClickedFilter]=this.lastFilterInput,this.page=1,f(this.getPreferenceKey("filters"),this.filters),window.bootstrap.Modal.getInstance(document.getElementById("filterModal")).hide(),this.loadAccounts()},saveGroupedAccounts(){f(this.getPreferenceKey("grouped"),this.pageOptions.groupedAccounts),this.page=1,this.loadAccounts()},removeFilter(t){this.filters[t]=null,this.page=1,f(this.getPreferenceKey("filters"),this.filters),this.loadAccounts()},hasFilters(){return this.filters.name!==null},showFilterDialog(t){this.lastFilterInput=this.filters[t]??"",this.lastClickedFilter=t,document.getElementById("filterInput").focus()},accountRole(t){return m.t("firefly.account_role_"+t)},getPreferenceKey(t){return"acc_index_"+g+"_"+t},pageNavigation(){return j(this.totalPages,this.page,this.generatePageUrl(!1))},sort(t){return this.page=1,this.pageOptions.sortingColumn=t,this.pageOptions.sortDirection=this.pageOptions.sortDirection==="asc"?"desc":"asc",this.updatePageUrl(),f(this.getPreferenceKey("sc"),this.pageOptions.sortingColumn),f(this.getPreferenceKey("sd"),this.pageOptions.sortDirection),this.loadAccounts(),!1},updatePageUrl(){this.pageUrl=this.generatePageUrl(!0),window.history.pushState({},"",this.pageUrl)},generatePageUrl(t){let e="./accounts/"+g+"?column="+this.pageOptions.sortingColumn+"&direction="+this.pageOptions.sortDirection+"&page=";return t?e+this.page:e},formatMoney(t,e){return D(t,e)},format(t){return v(t,m.t("config.date_time_fns"))},saveColumnSettings(){let t={};for(let e in this.tableColumns)this.tableColumns.hasOwnProperty(e)&&(t[e]=this.tableColumns[e].enabled);console.log("New settings",t),f(this.getPreferenceKey("columns"),t)},init(){document.getElementById("filterModal").addEventListener("shown.bs.modal",e=>{document.getElementById("filterInput").focus()}),this.pageOptions.isLoading=!0,this.notifications.wait.show=!0,this.page=k,this.notifications.wait.text=m.t("firefly.wait_loading_data"),N([{name:this.getPreferenceKey("columns"),default:{drag_and_drop:!1}},{name:this.getPreferenceKey("sc"),default:""},{name:this.getPreferenceKey("sd"),default:""},{name:this.getPreferenceKey("filters"),default:this.filters},{name:this.getPreferenceKey("grouped"),default:!0}]).then(e=>{for(let i in e[0])e[0].hasOwnProperty(i)&&this.tableColumns.hasOwnProperty(i)&&(this.tableColumns[i].enabled=e[0][i]??!0);this.pageOptions.sortingColumn=this.pageOptions.sortingColumn===""?e[1]:this.pageOptions.sortingColumn,this.pageOptions.sortDirection=this.pageOptions.sortDirection===""?e[2]:this.pageOptions.sortDirection;for(let i in e[3])e[3].hasOwnProperty(i)&&this.filters.hasOwnProperty(i)&&(this.filters[i]=e[3][i]);this.pageOptions.groupedAccounts=e[4],this.loadAccounts()})},saveActiveFilter(t){this.page=1,t.currentTarget.value==="both"&&(this.filters.active=null),t.currentTarget.value==="active"&&(this.filters.active=!0),t.currentTarget.value==="inactive"&&(this.filters.active=!1),f(this.getPreferenceKey("filters"),this.filters),this.loadAccounts()},renderObjectValue(t,e){let i=new F;if(t==="name")return i.renderName(e)},submitInlineEdit(t){t.preventDefault();const e=t.currentTarget,i=e.dataset.index,a=e.dataset.field,u=e.dataset.id;console.log("Clicked edit button for account on index #"+i+" and field "+a);const l='input[data-field="'+a+'"][data-index="'+i+'"]';console.log(l);const r=document.querySelectorAll(l)[0].value??"";if(r==="")return;console.log("new field name is "+a+"="+r+" for account #"+e.dataset.id);const s={};s[a]=r,new T().put(u,s),this.accounts[i][a]=r,this.accounts[i].nameEditorVisible=!1},cancelInlineEdit(t){const i=t.currentTarget.dataset.index;this.accounts[i].nameEditorVisible=!1},triggerEdit(t){const e=t.currentTarget,i=e.dataset.index,a=e.dataset.id;console.log("Index of this row is "+i+" and ID is "+a),this.accounts[i].nameEditorVisible=!0},loadAccounts(){this.pageOptions.isLoading=!0;const t=[{column:this.pageOptions.sortingColumn,direction:this.pageOptions.sortDirection}];let e=[];for(let s in this.filters)this.filters.hasOwnProperty(s)&&this.filters[s]!==null&&e.push({column:s,filter:this.filters[s]});const i=new Date(window.store.get("start")),a=new Date(window.store.get("end"));let l={sorting:t,filters:e,today:new Date,type:g,page:this.page,start:i,end:a};this.tableColumns.balance_difference.enabled||(delete l.start,delete l.end),this.accounts=[];let r={};new K().index(l).then(s=>{this.totalPages=s.meta.pagination.total_pages;for(let o=0;o<s.data.length;o++)if(s.data.hasOwnProperty(o)){let n=s.data[o],h={id:parseInt(n.id),active:n.attributes.active,name:n.attributes.name,nameEditorVisible:!1,type:n.attributes.type,role:n.attributes.account_role,iban:n.attributes.iban===null?"":n.attributes.iban.match(/.{1,4}/g).join(" "),account_number:n.attributes.account_number===null?"":n.attributes.account_number,current_balance:n.attributes.current_balance,currency_code:n.attributes.currency_code,native_current_balance:n.attributes.native_current_balance,native_currency_code:n.attributes.native_currency_code,last_activity:n.attributes.last_activity===null?"":v(new Date(n.attributes.last_activity),m.t("config.month_and_day_fns")),balance_difference:n.attributes.balance_difference,native_balance_difference:n.attributes.native_balance_difference,liability_type:n.attributes.liability_type,liability_direction:n.attributes.liability_direction,interest:n.attributes.interest,interest_period:n.attributes.interest_period,current_debt:n.attributes.current_debt},c=n.attributes.object_group_id;this.pageOptions.groupedAccounts||(c="0"),r.hasOwnProperty(c)||(r[c]={group:{id:c==="0"||c===null?null:parseInt(c),title:n.attributes.object_group_title,order:n.attributes.object_group_order},accounts:[]}),r[c].accounts.push(h)}let d=[];for(let o in r)d.push(r[o]);d.sort(function(o,n){return o.group.order-n.group.order}),this.accounts=d,this.notifications.wait.show=!1,this.pageOptions.isLoading=!1})}}},O={index:R,dates:L};function C(){Object.keys(O).forEach(t=>{console.log(`Loading page component "${t}"`);let e=O[t]();Alpine.data(t,()=>e)}),Alpine.magic("t",t=>(e,i)=>m.t(e,i)),Alpine.start()}document.addEventListener("firefly-iii-bootstrapped",()=>{console.log("Loaded through event listener."),C()});window.bootstrapped&&(console.log("Loaded through window variable."),C());
