import{a as t}from"./dates-BuFpeg-W.js";class n{list(a){return t.get("/api/v2/transactions",{params:a})}infiniteList(a){return t.get("/api/v2/infinite/transactions",{params:a})}show(a,i){return t.get("/api/v2/transactions/"+a,{params:i})}}export{n as G};
