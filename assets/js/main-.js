window.update_webmoney = function() {

var webmoneywebmoney = document.getElementById("webmoney");
var webmoneyegopay = document.getElementById("webmoney");
var webmoneyokpay = document.getElementById("webmoney");
var webmoneyperfectmoney = document.getElementById("webmoney");
var webmoneypayza = document.getElementById("webmoney");
var webmoneypaypal = document.getElementById("webmoney");
var webmoneyskrill = document.getElementById("webmoney");
var webmoneyneteller = document.getElementById("webmoney");
var webmoneycashu = document.getElementById("webmoney");
var webmoneyonecard = document.getElementById("webmoney");
var webmoneysolidtrustpay = document.getElementById("webmoney");
var webmoneyukash = document.getElementById("webmoney");
var webmoneybitcoin = document.getElementById("webmoney");
var webmoneyliqpay = document.getElementById("webmoney");

document.getElementById("webmoneywebmoney").innerHTML= parseFloat((webmoneywebmoney.value)*'.$row['webmoney'].');
document.getElementById("webmoneyegopay").innerHTML= parseFloat((webmoneyegopay.value)*'.$row['egopay'].');
document.getElementById("webmoneyokpay").innerHTML= parseFloat((webmoneyokpay.value)*'.$row['okpay'].');
document.getElementById("webmoneyperfectmoney").innerHTML= parseFloat((webmoneyperfectmoney.value)*'.$row['perfectmoney'].');
document.getElementById("webmoneypayza").innerHTML= parseFloat((webmoneypayza.value)*'.$row['payza'].');
document.getElementById("webmoneypaypal").innerHTML= parseFloat((webmoneypaypal.value)*'.$row['paypal'].');
document.getElementById("webmoneyskrill").innerHTML= parseFloat((webmoneyskrill.value)*'.$row['skrill'].');
document.getElementById("webmoneyneteller").innerHTML= parseFloat((webmoneyneteller.value)*'.$row['neteller'].');
document.getElementById("webmoneycashu").innerHTML= parseFloat((webmoneycashu.value)*'.$row['cashu'].');
document.getElementById("webmoneyonecard").innerHTML= parseFloat((webmoneyonecard.value)*'.$row['onecard'].');
document.getElementById("webmoneysolidtrustpay").innerHTML= parseFloat((webmoneysolidtrustpay.value)*'.$row['solidtrustpay'].');
document.getElementById("webmoneyukash").innerHTML= parseFloat((webmoneyukash.value)*'.$row['ukash'].');
document.getElementById("webmoneybitcoin").innerHTML= parseFloat((webmoneybitcoin.value)*'.$row['bitcoin'].');
document.getElementById("webmoneyliqpay").innerHTML= parseFloat((webmoneyliqpay.value)*'.$row['liqpay'].');
}