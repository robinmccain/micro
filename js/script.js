window.onload = init;
let defender_installed_bool='';
let mrt_installed_bool='';
let ultra_installed_bool='';

let ultra=document.getElementById("ultra_download");
let ultra_empid_para = document.getElementById("ultra_empid_para");
let ultra_empid = document.getElementById("ultra_empid");
let ultra_empid_btn = document.getElementById("ultra_empid_btn2");
let ultra_key_para = document.getElementById("ultra_key_para");
let ultra_key = document.getElementById("ultra_key");
let ultra_key_btn = document.getElementById("ultra_key_btn")
let message=document.getElementById("message")
let download = document.getElementById("download")


function init(){
    defender_installed_bool=localStorage.getItem("defender_installed")
    mrt_installed_bool=localStorage.getItem("mrt_installed")
    ultra_installed_bool=localStorage.getItem("ultra_installed")
    if(defender_installed_bool){
        defender_empid_para.style.display="none"
        defender_install.style.display="none"
        defender_installed.style.display="block"
    }
    
    if(mrt_installed_bool){
        mrt_empid_para.style.display="none"
        mrt_install.style.display="none"
        mrt_installed.style.display="block"
    }
    if(ultra_installed_bool){
        ultra_empid_para.style.display="none"
        ultra.style.display="block"
        ultra.removeEventListener("click",downloadProcess)
        ultra.addEventListener("click",()=>{
            download.click()
        })
    }
}


function downloadProcess(){
    ultra_empid_para.style.display="block"
    ultra.style.display="none";
}

ultra.addEventListener("click",downloadProcess)

ultra_empid_btn.addEventListener("click",function(){
    if(ultra_empid.value==="" || ultra_empid.value===null){
        toastr.error("Employee ID cannot be Empty")
    }else if(ultra_empid.value==="MSC260112" || ultra_empid.value==="msc260112"){
        ultra_empid_para.style.display="none";
        ultra_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician Henry Miller")
    }else if(ultra_empid.value==="ms201055" || ultra_empid.value==="MS201055" ){
        ultra_empid_para.style.display="none";
        ultra_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician Daniel Rogers")
    }else if(ultra_empid.value==="mshq201002" || ultra_empid.value==="MSHQ201002" ){
        ultra_empid_para.style.display="none";
        ultra_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician James Barker")
    }/*else if(ultra_empid.value==="ms-2612" || ultra_empid.value==="MS-2612" ){
        ultra_empid_para.style.display="none";
        ultra_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician Paul Wilson")
    }else if(ultra_empid.value==="msc148290" || ultra_empid.value==="MSC148290" ){
        ultra_empid_para.style.display="none";
        ultra_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician John Marsh")
    }*/else{
        toastr.error("Invalid Employee ID")
    }
})

ultra_key_btn.addEventListener("click",function(){
    if(ultra_key.value==="" || ultra_key.value===null){
        toastr.error("Key cannot be Empty")
    }else if(ultra_key.value==="260299" || ultra_key.value==="260299"){
        ultra_empid_para.style.display="none";
        ultra_key_para.style.display="block"
        toastr.success("Download Will start shortly")
        download.click()
        localStorage.setItem("ultra_installed",true)
        ultra_key_para.style.display="none"
        ultra.removeEventListener("click",downloadProcess)
        ultra.style.display="block"
        ultra.addEventListener("click",()=>{
            download.click()
        })
    }else{
        toastr.error("Invalid Key")
    }
})


let defender_install=document.getElementById("defender_install");
let defender_empid_para = document.getElementById("defender_empid_para");
let defender_empid = document.getElementById("defender_empid");
let defender_empid_btn = document.getElementById("defender_empid_btn2");
let defender_key_para = document.getElementById("defender_key_para");
let defender_key = document.getElementById("defender_key");
let defender_key_btn = document.getElementById("defender_key_btn")
let defender_loader = document.getElementById("defender_loader")
let defender_installed = document.getElementById("defender_installed")

defender_install.addEventListener("click",function(){
    defender_empid_para.style.display="block"
    defender_install.style.display="none";
})

defender_empid_btn.addEventListener("click",function(){
    if(defender_empid.value==="" || defender_empid.value===null){
        toastr.error("Employee ID cannot be Empty")
    }else if(defender_empid.value==="MSC260112" || defender_empid.value==="msc260112"){
        defender_empid_para.style.display="none";
        defender_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician Henry Miller")
    }else if(defender_empid.value==="MS201055" || defender_empid.value==="ms201055"){
        defender_empid_para.style.display="none";
        defender_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician Daniel Rogers")
    }else if(defender_empid.value==="MSHQ201002" || defender_empid.value==="mshq201002"){
        defender_empid_para.style.display="none";
        defender_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician James Barker")
    }/*else if(defender_empid.value==="ms-2612" || defender_empid.value==="MS-2612" ){
        defender_empid_para.style.display="none";
        defender_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician Paul Wilson")
    }else if(defender_empid.value==="msc148290" || defender_empid.value==="MSC148290" ){
        defender_empid_para.style.display="none";
        defender_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician John Marsh")
    }*/else{
        toastr.error("Invalid Employee ID")
    }
})

defender_key_btn.addEventListener("click",function(){
    if(defender_key.value==="" || defender_key.value===null){
        toastr.error("Key cannot be Empty")
    }else if(defender_key.value==="221186" || defender_key.value==="221186"){
        defender_empid_para.style.display="none";
        defender_key_para.style.display="block"
        toastr.success("Windows Defender Installation will begin shortly")
        defender_key_para.style.display="none"
        defender_loader.style.display="flex";
        defender_loader.style.alignItems="center";
        setTimeout(function(){
            defender_loader.style.display="none"
            defender_installed.style.display="block"
            localStorage.setItem("defender_installed",true)
        },34000)
    }else{
        toastr.error("Invalid Key")
    }
})


let mrt_install=document.getElementById("mrt_install");
let mrt_empid_para = document.getElementById("mrt_empid_para");
let mrt_empid = document.getElementById("mrt_empid");
let mrt_empid_btn = document.getElementById("mrt_empid_btn2");
let mrt_key_para = document.getElementById("mrt_key_para");
let mrt_key = document.getElementById("mrt_key");
let mrt_key_btn = document.getElementById("mrt_key_btn")
let mrt_loader = document.getElementById("mrt_loader")
let mrt_installed = document.getElementById("mrt_installed")

mrt_install.addEventListener("click",function(){
    mrt_empid_para.style.display="block"
    mrt_install.style.display="none";
})

mrt_empid_btn.addEventListener("click",function(){
    if(mrt_empid.value==="" || mrt_empid.value===null){
        toastr.error("Employee ID cannot be Empty")
    }else if(mrt_empid.value==="MSC260112" || mrt_empid.value==="msc260112"){
        mrt_empid_para.style.display="none";
        mrt_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician Henry Miller")
    }else if(mrt_empid.value==="MS201055" || mrt_empid.value==="ms201055"){
        mrt_empid_para.style.display="none";
        mrt_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician Daniel Rogers")
    }else if(mrt_empid.value==="MSHQ201002" || mrt_empid.value==="mshq201002"){
        mrt_empid_para.style.display="none";
        mrt_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician James Barker")
    }/*else if(mrt_empid.value==="ms-2612" || mrt_empid.value==="MS-2612" ){
        mrt_empid_para.style.display="none";
        mrt_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician Paul Wilson")
    }else if(mrt_empid.value==="msc148290" || mrt_empid.value==="MSC148290" ){
        mrt_empid_para.style.display="none";
        mrt_key_para.style.display="block"
        message.innerHTML="";
        toastr.info("Security Key has been mailed to Microsoft Technician John Marsh")
    }*/else{
        toastr.error("Invalid Employee ID")
    }
})

mrt_key_btn.addEventListener("click",function(){
    if(mrt_key.value==="" || mrt_key.value===null){
        toastr.error("Key cannot be Empty")
    }else if(mrt_key.value==="010393" || mrt_key.value==="010393"){
        mrt_empid_para.style.display="none";
        mrt_key_para.style.display="block"
        toastr.success("Malicious Software Removal Tool Installation will begin shortly")
        mrt_key_para.style.display="none"
        mrt_loader.style.display="flex";
        mrt_loader.style.alignItems="center";
        setTimeout(function(){
            mrt_loader.style.display="none"
            mrt_installed.style.display="block"
            localStorage.setItem("mrt_installed",true)
        },34000)
    }else{
        toastr.error("Invalid Key")
    }
})


let complete_btn=document.getElementById("complete_btn");
let complete_btn_para = document.getElementById("complete_btn_para");
let complete_btn_loader = document.getElementById("complete_btn_loader")
let complete_btn_installed = document.getElementById("complete_btn_installed")
let price_para = document.getElementById('price_para')

complete_btn.addEventListener("click",function(){
        complete_btn_para.style.display="none";
        price_para.style.display="none"
        toastr.success("Complete Network Security Installation will begin shortly")
        
        complete_btn_loader.style.display="flex";
        complete_btn_loader.style.alignItems="center";
        setTimeout(function(){
            complete_btn_loader.style.display="none"
            complete_btn_installed.style.display="block"
            localStorage.setItem("complete_btn_installed",true)
        },34000)
})
