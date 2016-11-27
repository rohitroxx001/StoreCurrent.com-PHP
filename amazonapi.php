<?php

// Your AWS Access Key ID, as taken from the AWS Your Account page
$aws_access_key_id = "AKIAI5VXPZYLFUBWFKKA";

// Your AWS Secret Key corresponding to the above ID, as taken from the AWS Your Account page
$aws_secret_key = "EfRU+/dO2XONO/jv7NTmr5715D9w8c//N+vumSNL";

// The region you are interested in
$endpoint = "webservices.amazon.in";

$uri = "/onca/xml";

$params = array(
    "Service" => "AWSECommerceService",
    "Operation" => "ItemLookup",
    "AWSAccessKeyId" => "AKIAI5VXPZYLFUBWFKKA",
    "AssociateTag" => "storecurrentc-21",
    "ItemId" => "B005NGWRSE",
    "IdType" => "EAN",
    "ResponseGroup" => "Images,ItemAttributes,Offers",
    "Version" => "2015-10-01"
);

// Set current timestamp if not set
if (!isset($params["Timestamp"])) {
    $params["Timestamp"] = gmdate('Y-m-d\TH:i:s\Z');
}

// Sort the parameters by key
ksort($params);

$pairs = array();

foreach ($params as $key => $value) {
    array_push($pairs, rawurlencode($key)."=".rawurlencode($value));
}

// Generate the canonical query
$canonical_query_string = join("&", $pairs);

// Generate the string to be signed
$string_to_sign = "GET\n".$endpoint."\n".$uri."\n".$canonical_query_string;

// Generate the signature required by the Product Advertising API
$signature = base64_encode(hash_hmac("sha256", $string_to_sign, $aws_secret_key, true));

// Generate the signed URL
$request_url = 'http://'.$endpoint.$uri.'?'.$canonical_query_string.'&Signature='.rawurlencode($signature);

echo "Signed URL: \"".$request_url."\"";

var_dump($result);

?>

<div class="product-box">
    <a target="_blank" href="http://www.amazon.com/Braun-cruZer-beard-Bartschneider-schwarz/dp/B005NGWRSE%3FSubscriptionId%3DAKIAI5VXPZYLFUBWFKKA%26tag%3Dstorecurrentc-21%26linkCode%3Dxm2%26camp%3D2025%26creative%3D165953%26creativeASIN%3DB005NGWRSE">
        <img src="http://ecx.images-amazon.com/images/I/31srcpK%2BxdL._SL160_.jpg" width="120" height="160">
    </a>
    <div class="product-title">
        <h3>Braun cruZer 5 beard Bartschneider schwarz</h3>
    </div>
    <p class="product-price">$92.16<br>
       <a target="_blank" style="color: #337ab7; text-decoration:none;" href="http://www.amazon.com/gp/offer-listing/B005NGWRSE%3FSubscriptionId%3DAKIAI5VXPZYLFUBWFKKA%26tag%3Dstorecurrentc-21%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3DB005NGWRSE"> More offers </a>
   </p>
    <div>
        <span class="a-button a-button-primary">
            <a target="_blank" href="http://www.amazon.com/Braun-cruZer-beard-Bartschneider-schwarz/dp/B005NGWRSE%3FSubscriptionId%3DAKIAI5VXPZYLFUBWFKKA%26tag%3Dstorecurrentc-21%26linkCode%3Dxm2%26camp%3D2025%26creative%3D165953%26creativeASIN%3DB005NGWRSE" style="text-decoration:none">
                <span class="a-button-inner">
                    <img src="http://ddjax94hptnew.cloudfront.net/assets/images/Amazon-Favicon-64x64.png" class="a-icon a-icon-shop-now">
                    <input class="a-button-input" type="submit" value="Add to cart">
                    <span class="a-button-text">Shop Now</span>
                </span>
            </a>
        </span>
    </div>
</div>
<style>
.product-box {
	border: 1px solid #eee;
	float: left;
	margin: 4px 4px 4px 4px;
	position: relative;
	width: 132px;
	padding: 4px;
	font-family: Helvetica;

}
.product-title h3{
	margin: 2px 3px 0 2px;
	min-width: 40px;
	font-size: 12px;
	line-height: 15px;
	color: #000;
	position: relative;
	text-align: center;
	display: block;
	overflow: hidden;
	height: 45px;
}

.product-price {
	text-align: center;
	color: #900;
	font-weight: bold;
}

.a-icon-cart {
	left: 2px;
	top: 2px;
	position: absolute;
	height: 25px;
	width: 25px;
	background-position: -35px -5px;
	background-image: url(../images/amzn-sprite.png);
	background-repeat: no-repeat;
	background-size: 400px 600px;
	-webkit-background-size: 400px 600px;
	display: inline-block;
	vertical-align: top;
}

.a-icon-shop-now {
	left: 2px;
	top: 2px;
	position: absolute;
	height: 25px;
	width: 25px;
	background: 0 0;
	display: inline-block;
	vertical-align: top;
}

.a-button {
	background: #d8dde6;
	display: block;
	padding: 0;
	vertical-align: middle;
	height: 31px;
	*height: 29px;
	border: 1px solid;
	border-color: #bcc1c8 #bababa #adb2bb;
	text-align: center;
	overflow: hidden;
	text-decoration: none!important;
	cursor: pointer;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	width: 100%;
	max-width: 130px;
	box-sizing: border-box;
	margin-top: 11px;
}


.a-button-text {
	position: relative;
	z-index: 10;
	color: #111;
	font-size: 12px;
	text-align: center;
	line-height: 29px;
	display: block;
	font-family: Arial,sans-serif;
	white-space: nowrap;
	background-color: transparent;
	margin: 0;
	border: 0;
	outline: 0;
	padding: 0 2px 0 29px;
}


.a-button-text.centered {
	padding: 0 2px;
}

.a-button-input {
	position: absolute;
	z-index: 20;
	height: 100%;
	width: 100%;
	left: 0;
	top: 0;
	background-color: #fff;
	outline: 0;
	border: 0;
	overflow: visible;
	cursor: pointer;
	opacity: .01;
	filter: alpha(opacity=1);
}


.a-button-primary {
	border-color: #cba957 #bf942a #aa8326;
	background: #f0c14b;
}

.a-button-primary:active {
	border-color: #aa8326 #bf942a #bf942a;
}

.a-button-primary:hover {
	border-color: #c59f43 #aa8326 #957321;
}

.a-button-primary:focus {
	outline: 0;
	border-color: #e47911;
	-webkit-box-shadow: 0 0 3px rgba(228,121,17,.5);
	-moz-box-shadow: 0 0 3px rgba(228,121,17,.5);
	box-shadow: 0 0 3px rgba(228,121,17,.5);
}

.a-button-inner {
	position: relative;
	height: 100%;
	overflow: hidden;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	text-align: center;
	cursor: pointer;
	display: block;
}

.a-button-primary .a-button-inner {
	-webkit-box-shadow: 0 1px 0 rgba(255,255,255,.4) inset;
	-moz-box-shadow: 0 1px 0 rgba(255,255,255,.4) inset;
	box-shadow: 0 1px 0 rgba(255,255,255,.4) inset;
	background-color: #f7dfa5;
	background: -webkit-gradient(linear,left top,left bottom,from(#f7dfa5),to(#f0c14b));
	background: -webkit-linear-gradient(top,#f7dfa5,#f0c14b);
	background: -moz-linear-gradient(top,#f7dfa5,#f0c14b);
	background: -ms-linear-gradient(top,#f7dfa5,#f0c14b);
	background: -o-linear-gradient(top,#f7dfa5,#f0c14b);
	background: #f3d078;
}

.lt-ie9 .a-button-primary .a-button-inner {
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff7dfa5', endColorstr='#fff0c14b', GradientType=0);
}

.a-button-primary:active .a-button-inner {
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2) inset;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,.2) inset;
	box-shadow: 0 1px 3px rgba(0,0,0,.2) inset;
	background-color: #f0c14b;
	background-image: none;
}

.lt-ie9 .a-button-primary:active .a-button-inner {
	filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.a-button-primary:hover .a-button-inner {
	background-color: #f5d78e;
	background: -webkit-gradient(linear,left top,left bottom,from(#f5d78e),to(#eeb933));
	background: -webkit-linear-gradient(top,#f5d78e,#eeb933);
	background: -moz-linear-gradient(top,#f5d78e,#eeb933);
	background: -ms-linear-gradient(top,#f5d78e,#eeb933);
	background: -o-linear-gradient(top,#f5d78e,#eeb933);
	background: #f1c860;
}

.lt-ie9 .a-button-primary:hover .a-button-inner {
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5d78e', endColorstr='#ffeeb933', GradientType=0);
}
</style>