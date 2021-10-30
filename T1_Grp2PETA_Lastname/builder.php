<!DOCTYPE html>
<html>

    <head>
        <title>Desktop Builder</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/builder.css">
        <link rel="icon" type="image/png" href="media/tab-icon.svg">
    </head>

    <body>
        <nav>
            <ul class="nav">
                <li><a href="Main_page.php">Home</a>
                <li class="nav-active"><a href="#">Desktop Builder</a>
                <li><a href="Product.php">Products</a>
                <li><a href="prebuild.php">Pre-Built PCs</a>
                <li><a href="">Cart</a>
                <li><a href="">About Us</a>
                <li><a href="">Contact Us</a>
                <li><a href="">Terms & Conditions</a>
            </ul>
        </nav>
        <div class="main">
            <div class="recommended">
                <h2>Recommended Components</h2>
                <div>
                    <h3>PCRyzen 3 3200G Starter Gaming Build</h3>
                    PhP 25,520
                </div>
                <div>
                    <h3>MOUSELogitech M185</h3>
                    PhP 460
                </div>
                <div>
                    <h3>MOBOAsus B550M-Plus</h3>
                    PhP 8,100
                </div>
            </div>
            <div class="builder">
                <div>
                    <label class="component" for="1">Processor/CPU</label>
                    <br>
                    <select class="dropdown" name="cpu" id="1">
                        <option value="0">Choose an option</option>
                        <option value="1">Intel Core i5-8400 Processor</option>
                        <option value="2">Intel Core i5-9400 Processor</option>
                        <option value="3">AMD Ryzen 3 3200G Processor</option>
                        <option value="4">AMD Ryzen 5 3600 Processor</option>
                        <option value="5">AMD Ryzen 5 5600X Processor</option>
                    </select>
                </div>
                <br>
                <div>
                    <label class="component" for="2">Motherboard/MOBO</label>
                    <br>
                    <select class="dropdown" name="mobo" id="2">
                        <option value="0">Choose an option</option>
                        <option value="1">Asus TUF B550M-Plus Gaming AM4</option>
                        <option value="2">Asus Vanguard Intel B85</option>
                        <option value="3">Gigabyte GA-Z170X-Gaming</option>
                        <option value="4">Gigabyte GA-A520m-ds3h</option>
                        <option value="5">MSI Z39-A Pro</option>
                    </select>
                </div>
                <br>
                <div>
                    <label class="component" for="3">Video Card/GPU</label>
                    <br>
                    <select class="dropdown" name="gpu" id="3">
                        <option value="0">Choose an option</option>
                        <option value="1">Asus Strix GTX 1080</option>
                        <option value="2">Asus Phoenix GTX 1650</option>
                        <option value="3">Gigabyte GeForce GX 1050</option>
                        <option value="4">Zotac 3060ti</option>
                        <option value="5">Zotac GTX 1650</option>
                        <option value="6">GV-N710D3-2GL</option>
                    </select>
                </div>
                <br>
                <div>
                    <label class="component" for="4">Memory/RAM</label>
                    <br>
                    <select class="dropdown" name="ram" id="4">
                        <option value="0">Choose an option</option>
                        <option value="1">Corsair Vengeance</option>
                        <option value="2">Corsair Vengeance LPX</option>
                        <option value="3">Kingston HyperX Fury</option>
                        <option value="4">G.Skill Ripjaws 2x8gb</option>
                        <option value="5">GeIL Dragon RAM</option>
                    </select>
                </div>
                <br>
                <div>
                    <label class="component" for="5">Power Supply/PSU</label>
                    <br>
                    <select class="dropdown" name="psu" id="5">
                        <option value="0">Choose an option</option>
                        <option value="1">Seasonic Focus GX750</option>
                        <option value="2">Seasonic S12III 650</option>
                        <option value="3">Cooler Master V850</option>
                        <option value="4">GIGABYTE P650B</option>
                        <option value="5">Be Quiet! System Power 9700</option>
                    </select>
                </div>
                <br>
                <div>
                    <label class="component" for="6">Storage/HDD/SSD</label>
                    <br>
                    <select class="dropdown" name="storage" id="6">
                        <option value="0">Choose an option</option>
                        <option value="1">Western Digital 1tb Harddisk Drive Blue</option>
                        <option value="2">Seagate Backup Plus Slim STDR2000301</option>
                        <option value="3">Seagate Backup Slim Portable</option>
                        <option value="4">Seagate BarraCuda</option>
                        <option value="5">Iomega 500gb</option>
                        <option value="6">ADATA S40G 1TB</option>
                        <option value="7">ADATA XPG SX600 Pro</option>
                        <option value="8">Intel SSD 545s series</option>
                        <option value="9">ADATA XPG SX8200 Pro</option>
                        <option value="10">ADATA SU800</option>
                    </select>
                </div>
                <br>
                <div>
                    <label class="component" for="7">Case</label>
                    <br>
                    <select class="dropdown" name="case" id="7">
                        <option value="0">Choose an option</option>
                        <option value="1">Cooler Master MAsterBox MB600L</option>
                        <option value="2">Cooler Master NR400</option>
                        <option value="3">NZXT H210</option>
                    </select>
                </div>
                <div class="end">
                    <a class="cart" href="">Add To Cart</a>
                    <p class="cost">Total Cost: PhP 0</p>
                </div>
            </div>
            <div class="affordable">
                <h2>Affordable Components</h2>
                <div>
                    <h3>CASECoolerMaster MasterBox NR400</h3>
                    PhP 2,700
                </div>
                <div>
                    <h3>CPUIntel i5-8400</h3>
                    PhP 8,270
                </div>
                <div>
                    <h3>MOBOAsus B85M-G</h3>
                    PhP 1,770
                </div>
            </div>
        </div>
        <footer>
            <div class="footer">Don Bosco Technical Institute of Makati<br>Grade 9 - Rinaldi (ICT1) (SY
                2021-2022)<br>©2021 PC Component Department</div>
        </footer>
    </body>

</html>