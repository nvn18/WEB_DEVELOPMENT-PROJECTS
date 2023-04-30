<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIPRO PAGE</title>
</head>
<style>
body{
    background-color:blue;
}
.header
{
    background-color: aqua;
    padding:5px;
    text-align: center;
}
.header:hover
{
background-color:lightblue;
}
a
{
    margin-right:25px;
    text-decoration: none;
    color:blueviolet;
    font-size:25px;
}
a:hover
{
    color:red;
}
.images-box
{
    padding-top: 20px;
    justify-items: center;
    padding-left: 25px;
    box-shadow: 10px 10px;
}
.grid-container
{
    display:grid;
    grid-template-columns: auto auto ;
    background-color: blue;
    height:300px;
    gap:40px;
    padding-top: 20px;
    padding-left: 25px;
}
.grid-container > .para{
    background-color:aliceblue;
    width:800px;
    box-shadow:10px 10px lightblue;
    border-radius:5px 5px;
}
.grid-container > .box{
    background-color: blue;
    font-size:15px;
}
.item
{
    margin:4px;
    font-size:21px;
    background-color: skyblue;
    width:55%;
    height: 25%;
    margin-left:250px;
    padding:10px;
    border-radius:5px 5px;
}
.item p{
    font-size:20px;
    text-align: center;
}
.grid-container1
{
    display:grid;
    grid-template-columns: auto auto auto;
    background-color:blue;
    padding-top:150px;
    gap:40px;
    height:300px;
}
.grid-container1 > .cr
{
    background-color:blueviolet;
    border-radius:10px 10px;
    box-shadow: 10px 10px grey;
}
.item1
{
    color:aliceblue;
    font-size:25px;
    text-align: center;
}
.item2
{
   font-size: 20px;
   text-align: center;
   color:gold;
}
.grid-container1 > .cr1
{
    background-color:blueviolet;
    border-radius:10px 10px;
    box-shadow: 10px 10px grey;
}
.grid-container1 > .cr2
{
    background-color:blueviolet;
    border-radius:10px 10px;
    box-shadow: 10px 10px grey;
}
</style>
<body>
    <div class="header">
        <a href="#">🏠HOME</a>
        <a href="benifits.php">📜BENIFITS</a>
        <a href="gallery.php">📸GALLERY</a>
        <a href="awards.php"> 🏆AWARDS</a>
        <a href="help.php">🗳HELP</a>
    </div>
    <div class="images-box">
        <img src="w-1.jpg" width="490px" height="300px;"/>
        <img src="w-2.jpg"width="490px" height="300px;"/>
        <img src="w-1.jpg" width="490px" height="300px;"/>
    </div>
    <div class="grid-container">
        <div class="para">
            <h2 style="text-align:center">Wipro Information Technology Limited</h2>
            <p> 🚀 Wipro limited is an Indian information technology services corporation headquartered in Bangalore,india. In 2013, wipro demerged its non-it business into a separate companies to bring in more focus on independent business. <b>Ceo: Abidali Neemuchwala(feb1,2016) &nbsp;&nbsp;&nbsp; Founder:M.H. Hasham Premji</b></p>

<p>	Wipro Ltd is a global information technology, consulting and outsourcing company with 170,000+ workforce serving clients in 175+ cities across 6 continents. The company posted revenues of $7.7 Billion for the financial year ended Mar31,2016. Wipro applying-thought wipro helps customers do business better by leveraging our industrywide experience,deep technology expertise, comprehensive portfolio of services and vertically aligned business model. Our 55+ dedicated emerging technolgoies 'Centers of Excellence' enable us to harness the latest technology for delivering business capability to our clients.</p>
 
<p> Wipro is globally recognized for its innovatinve approach towards delivering business value and its commitment ti sustainability. Wipro champions optimized utilization of natural resources, captial and talent. Today we are a trusted partner of choice for global businesses looking to 'differentiate at the front' and 'standardize at the core' through technology interventions.</p>

        </div>
        <div class="box">
            <div class="item"><p>2001</p>

            🚀The first company in the world to be assessed at PCMM level 5 in 2001.</div>
                
                <div class="item"><p>2002</p>🚀Entered the BPO business in 2002.</div>
                
                <div class="item"><p>2008</p>🚀Entered the BPO-energy business in 2008.</div>
                
        </div>
    </div>
    <div class="grid-container1">
        <div class="cr">
            <div class="item1"><p>📜CORPORATE ADDRESS📜</p><br></div>
            <div class="item2"><p>Doddakanneli,<br>Sarjapur Road<br>Bangalore- 560 035<br>India<br>Ph: +91(80)28440011<br>Fax:+91(80)28440256</p></div>
        </div>
        <div class="cr1">
            <div class="item1"><p>📜CORPORATE ADDRESS📜</p><br></div>
            <div class="item2"><p>Doddakanneli,<br>Sarjapur Road<br>Bangalore- 560 035<br>India<br>Ph: +91(80)28440011<br>Fax:+91(80)28440256</p></div>
        </div>
        <div class="cr2">
            <div class="item1"><p>📜CORPORATE ADDRESS📜</p><br></div>
            <div class="item2"><p>Doddakanneli,<br>Sarjapur Road<br>Bangalore- 560 035<br>India<br>Ph: +91(80)28440011<br>Fax:+91(80)28440256</p></div>
        </div>
    </div>
</body>
</html>