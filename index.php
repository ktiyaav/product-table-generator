<?php 
if(isset($_POST['submit'])){
$pname = $_POST['pname'];
$plink = $_POST['plink'];
$pdesc = $_POST['pdesc'];
$blink = $_POST['blink'];
$btext = $_POST['btext'];
$pdesc = $_POST['pdesc'];
$pheader = $_POST['pheader'];

$code = '<table class="cg-table-two cg-orange">
<thead><tr><th>Image</th><th>Product</th><th>Features</th><th>Price</th></tr></thead>
<tbody>
<tr id="product-44"><td><div class="cg-tbl-ribbon"><small>'.$pheader.'</small></div><a href="" target="_blank" rel="nofollow noopener noreferrer" class="cg-aff-link cg-tbl-img"><img src="'.$plink.'" class="" alt="'.$pname.'" /></a></td>
<td><a href="'.$blink.'" target="_blank" rel="nofollow noopener noreferrer" class="cg-table-title cg-aff-link">'.$pname.'</a></td><td>
<div class="cg-tbl-ul">
<p>'.$pdesc.'</p></div></td><td><a href="'.$blink.'" target="_blank" rel="nofollow noopener noreferrer" data-style="default" class="cg-btn cg-red cg-aff-link cg-btn-md">'.$btext.'</a></td></tr>
</tbody>
</table>';
}
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>
.content{
  padding-top: 100px;
}
.css{
  border: 2px solid #ddd;
  padding: 10px!important;
  margin: 10px!important;
  box-shadow: 0px 3px 12px #ddd;
  border-radius: 7px;
  overflow: scroll;
  max-height: 500px;
}
.form{
  border: 2px solid #ddd;
  padding: 10px!important;
  margin: 10px!important;
  box-shadow: 0px 3px 12px #ddd;
  border-radius: 7px;
}
.title{
  text-transform: uppercase;
  font-weight: 700;
  padding: 10px;
  border-bottom: 1px dotted #ddd;
}
.input-class{
  padding: 10px;
  margin: 7px;
}
.text-area{
  height: 80px;
  padding: 10px;
  margin: 7px;
  width: 90%;
}
.product-demo{
  padding: 10px;
  margin: 30px;
}
.product-code{
  margin: 10px;
  padding: 10px;
  border: 1px solid #ddd;
  box-shadow: 0px 3px 10px #ddd;
  overflow: scroll;
  border-radius: 7px;
}
body {
  background-color: #eee!important;
}
.white{
  background-color: #fff;
}
a,body,div,html,p,small,span,strong,table,tbody,td,th,thead,tr{border:0;font-size:100%;font-style:inherit;font-weight:inherit;margin:0;outline:0;padding:0;vertical-align:baseline}html{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}a{background-color:transparent}a:active{outline:0}a,a:focus,a:hover,a:visited{text-decoration:none}strong{font-weight:700}small{font-size:80%}img{border:0}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}

html{box-sizing:border-box}
*,:after,:before{box-sizing:inherit}body{color:#808285;background:#fff;font-style:normal}strong{font-weight:700}img{height:auto;max-width:100%}table,td,th{border:1px solid rgba(0,0,0,.1)}table{border-collapse:separate;border-spacing:0;border-width:1px 0 0 1px;margin:0 0 1.5em;width:100%}th{font-weight:700}td,th{padding:8px;text-align:left;border-width:0 1px 1px 0}a{color:#4169e1}a:focus,a:hover{color:#191970}a:focus{outline:thin dotted}a:hover{outline:0}::selection{color:#fff;background:#0274be}body{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}body:not(.logged-in){position:relative}a,a:focus{text-decoration:none}a{transition:all .2s linear}img{vertical-align:middle}p{margin-bottom:1.75em}body{line-height:1.85714285714286}body{background-color:#fff}body{overflow-x:hidden}
.cg-tbl-ribbon {
    margin: auto 0 5px -18px;
    position: relative;
    text-transform: capitalize;
    background: #fff;
    box-shadow: 0 1px 3px rgba(0,0,0,.2);
    border: 2px solid var(--cg-theme-color);
    padding: 4px 10px;
    color: #000;
    background: yellowgreen;
    float: left;
    font-weight: bold;
    font-size: 12px !important;
    word-break: break-word;
    border-bottom-right-radius: 10px;
    border-top-left-radius: 10px;
    display: inline-block;
    max-width: 150px;
}
.cg-btn {
    transition: .2s ease-in-out;
    font-weight: 600;
    min-width: 100px;
    text-align: center;
    color: #fff !important;
    background: red!important;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.27);
    border-radius: 4px;
    padding: 9px 18px;
    font-size: 14px;
    display: inline-block;
    vertical-align: middle;
    margin: 0;
    text-transform: capitalize;
    text-decoration: none;
    background-color: var(--cg-theme-color);
    border: 0;
    cursor: pointer;
    line-height: normal;
    position: relative;
}
.cg-table-title {
    text-align: left;
    color: #303030;
    font-size: 20px;
    font-weight: 600;
    display: block;
    margin: 4px 5px 5px 5px;
    word-break: break-word;
}
table[class*="cg-table-"] thead th {
    padding: 8px;
    position: relative;
    background-color: var(--cg-theme-color);
    color: #fff;
    text-align: center;
    font-weight: bold;
    vertical-align: middle;
    font-size: 14px;
    text-transform: uppercase;
    border: none;
    background: yellowgreen;
}
.tblimg {
    vertical-align: middle;
    width: 95px;
    height: 95px;
}
strong{
  color: #e03e2d;
}
</style>
<script>
  function demoProduct(pname,plink,blink,pheader,btext,pdesc) {
		document.getElementById("ribbon").innerHTML =pheader;
		document.getElementById("pname").innerHTML =pname;
		document.getElementById("btext").innerHTML =btext;
		document.getElementById("pdesc").innerHTML =pdesc;
    document.getElementById('plink').setAttribute('href', plink);
    document.getElementById('btext').setAttribute('href', blink);
}
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
    <li class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Account</button>
    </li>
  </div>
</nav>

<div class="content container">
  <div class="row mx-auto">
    <div class="col-4 css mx-auto white">
      <div class="title">
        Copy CSS to the Website!
      </div>
      <xmp>
        
a,body,div,html,p,small,span,strong,table,tbody,td,th,thead,tr{border:0;font-size:100%;font-style:inherit;font-weight:inherit;margin:0;outline:0;padding:0;vertical-align:baseline}html{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}a{background-color:transparent}a:active{outline:0}a,a:focus,a:hover,a:visited{text-decoration:none}strong{font-weight:700}small{font-size:80%}img{border:0}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}

html{box-sizing:border-box}
*,:after,:before{box-sizing:inherit}body{color:#808285;background:#fff;font-style:normal}strong{font-weight:700}img{height:auto;max-width:100%}table,td,th{border:1px solid rgba(0,0,0,.1)}table{border-collapse:separate;border-spacing:0;border-width:1px 0 0 1px;margin:0 0 1.5em;width:100%}th{font-weight:700}td,th{padding:8px;text-align:left;border-width:0 1px 1px 0}a{color:#4169e1}a:focus,a:hover{color:#191970}a:focus{outline:thin dotted}a:hover{outline:0}::selection{color:#fff;background:#0274be}body{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}body:not(.logged-in){position:relative}a,a:focus{text-decoration:none}a{transition:all .2s linear}img{vertical-align:middle}p{margin-bottom:1.75em}body{line-height:1.85714285714286}body{background-color:#fff}body{overflow-x:hidden}


.cg-tbl-ribbon {
    margin: auto 0 5px -18px;
    position: relative;
    text-transform: capitalize;
    background: #fff;
    box-shadow: 0 1px 3px rgba(0,0,0,.2);
    border: 2px solid var(--cg-theme-color);
    padding: 4px 10px;
    color: #000;
    background: yellowgreen;
    float: left;
    font-weight: bold;
    font-size: 12px !important;
    word-break: break-word;
    border-bottom-right-radius: 10px;
    border-top-left-radius: 10px;
    display: inline-block;
    max-width: 150px;
}
.cg-btn {
    transition: .2s ease-in-out;
    font-weight: 600;
    min-width: 100px;
    text-align: center;
    color: #fff !important;
    background: red!important;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.27);
    border-radius: 4px;
    padding: 9px 18px;
    font-size: 14px;
    display: inline-block;
    vertical-align: middle;
    margin: 0;
    text-transform: capitalize;
    text-decoration: none;
    background-color: var(--cg-theme-color);
    border: 0;
    cursor: pointer;
    line-height: normal;
    position: relative;
}
.cg-table-title {
    text-align: left;
    color: #303030;
    font-size: 20px;
    font-weight: 600;
    display: block;
    margin: 4px 5px 5px 5px;
    word-break: break-word;
}
table[class*="cg-table-"] thead th {
    padding: 8px;
    position: relative;
    background-color: var(--cg-theme-color);
    color: #fff;
    text-align: center;
    font-weight: bold;
    vertical-align: middle;
    font-size: 14px;
    text-transform: uppercase;
    border: none;
    background: yellowgreen;
}
.tblimg {
    vertical-align: middle;
    width: 95px;
    height: 95px;
}
strong{
  color: #e03e2d;
}
      </xmp>
    </div>
    <div class="col-7 form mx-auto my-auto white">
      <div class="title">
        Enter Product Detail
      </div>
      <form action="" method="POST" onchange="demoProduct(pname.value,plink.value,blink.value,pheader.value,btext.value,pdesc.value)">
        <div class="row">
          <div class="col-6">
          <input type="text" class="input-class" placeholder="Enter Product Name" name="pname">
          <input type="text" class="input-class" placeholder="Product Image Link" name="plink">
          <input type="text" class="input-class" placeholder="Button Link" name="blink">
          </div>
          <div class="col-6">
          <input type="text" class="input-class" placeholder="Product Short Header" name="pheader">
          <!-- <input type="text" class="input-class" placeholder="Product Price" name="pprice"> -->
          <input type="text" class="input-class" placeholder="Button Text" name="btext">
          </div>
        </div>

        <div class="row">
            <div class="col-12">
              <input type="text" class="text-area" rows="10" class="input-class" placeholder="Enter Product Description" name="pdesc">  
             <br/> <xmp> Use <br> for line break & <strong></strong> For Highlighted red text</xmp>
            </div>
        </div>
        <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-success" style="height:30px;">
      </form>
    </div>
  </div>
  <?php if(isset($code)){
  echo'
  <div class="row mx-auto product-code white">';
   echo '<xmp>'.$code.'</xmp>';
  echo'</div>';}
  ?>
  <div class="row mx-auto product-demo white">
  <table class="cg-table-two cg-orange">
    <thead>
        <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Features</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr id="product-44">
            <td>
                <div class="cg-tbl-ribbon" id="ribbon"><small>EDITOR’S CHOICE</small></div>
                <a href="" target="_blank" rel="nofollow noopener noreferrer" class="cg-aff-link cg-tbl-img">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/61PDUaXrczL._SL300_.jpg" id="plink" class="tblimg" alt="NETGEAR Nighthawk X10" />
                </a>
            </td>
            <td><a href="" target="_blank" rel="nofollow noopener noreferrer" class="cg-table-title cg-aff-link" id="pname">NETGEAR Nighthawk X10</a></td>
            <td>
                <div class="cg-tbl-ul" id="pdesc">
                    <p>
                        <strong>Features:</strong> 6 Gigabit Ethernet LAN ports, AD7200 Quad-stream router, and 1.7 GHz quad-core processor-stream architecture<br />
                       <strong>Benefits:</strong>  Minimal ping, lag-free wired connectivity and ultra-fast connection
                    </p>
                </div>
            </td>
            <td><a href="" target="_blank" rel="nofollow noopener noreferrer" data-style="default" class="cg-btn cg-red cg-aff-link cg-btn-md" id="btext">Check On Amazon</a></td>
        </tr>
    </tbody>
</table>



  </div>
</div>
<div class="footer">

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>