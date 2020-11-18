<!Doctype html>
<html>
	<head>
		<title>
			GROCERY WEBSITE
		</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/card.css') }}">
      
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="Stylesheet" type="text/css" >


	</head>

<body>


<div class="navbar">
<ul>
	<li><a href="#"><span><i class="fa fa-bars" aria-hidden="true" style="padding-top: 10px;"></i></span>MENU</a></li>

	<li>

			<a href="#"><span><i class="fas fa-home" style="padding-top: 10px;"></i></span>HOME</a>

	</li>
		<li><div class="merge"><i class="fa fa-search" aria-hidden="true"></i>
		<input type="text" placeholder="Search...">
			<button><i class="fa fa-search" aria-hidden="true"></i>
		</button></div></li>
	<li>
            <a href="#"><span><i class="fas fa-home" style="padding-top: 10px;"></i></span>ORDERS&RETURNS</a>
    </li>
    <li>
		<a href="../HTML/LoginRegister.html"><span><i class="fas fa-user" style="padding-top: 10px;"></i></span>LOGIN/REGISTER</a>
    </li>

    <li>

        <a href="#"><span><i class="fa fa-shopping-cart" aria-hidden="true" style="padding-top: 10px;"></i></span>CART</a>

    </li>
</ul>




</div>


<div class="container">

	<input type="radio" id="i1" name="images" checked />
	<input type="radio" id="i2" name="images" />
	<input type="radio" id="i3" name="images" />
	<input type="radio" id="i4" name="images" />
	<input type="radio" id="i5" name="images" />

	<div class="slide_img" id="one">

        <img src="D:\grocery-management\storage\app\public\images\Bakery.jpg">

				<label class="prev" for="i5"><span>&#x2039;</span></label>
				<label class="next" for="i2"><span>&#x203a;</span></label>

	</div>

	<div class="slide_img" id="two">

        <img src="D:\grocery-management\storage\app\public\images\Baverages.jpg">

				<label class="prev" for="i1"><span>&#x2039;</span></label>
				<label class="next" for="i3"><span>&#x203a;</span></label>

	</div>

	<div class="slide_img" id="three">
        <img src="D:\grocery-management\storage\app\public\images\CannedGoods.jpg">

				<label class="prev" for="i2"><span>&#x2039;</span></label>
				<label class="next" for="i4"><span>&#x203a;</span></label>
	</div>

	<div class="slide_img" id="four">
        <img src="D:\grocery-management\storage\app\public\images\Dairy.jpg">

				<label class="prev" for="i3"><span>&#x2039;</span></label>
				<label class="next" for="i5"><span>&#x203a;</span></label>
	</div>

	<div class="slide_img" id="five">
			<img src="D:\grocery-management\storage\app\public\images\VegetablesFruits.jpg">

				<label class="prev" for="i4"><span>&#x2039;</span></label>
				<label class="next" for="i1"><span>&#x203a;</span></label>

	</div>

	<div id="nav_slide">
		<label for="i1" class="dots" id="dot1"></label>
		<label for="i2" class="dots" id="dot2"></label>
		<label for="i3" class="dots" id="dot3"></label>
		<label for="i4" class="dots" id="dot4"></label>
		<label for="i5" class="dots" id="dot5"></label>
	</div>

</div>



<!-- <p style= "font-size:larger;"><em>Products</em></p>
<table>
	<tr>
		<td>
			<div style:margin >
				<img src="../images/Amul Cheese.jpg" alt="Amul cheese">
				<p>Name:Amul Cheese<br>
				Price:250/-<br>
				Description:xyz<br>
				</p>
			</div>
		</td>

		<td>
			<div>
        		<img src="../images/coriander.jpg" alt="coriander">
				<p>Name:Coriander<br>
				Price:100/-<br>
				Description:abc<br>
				</p>
			</div>
		</td>

		<td>
			<div>
				<img src="../images/coca cola.jpg" alt="coca cola">
				<p>Name:Coca Cola<br>
				Price:50/-<br>
				Description:pqr<br>
				</p>
			</div>
		</td>
	</tr>
</table> -->


<div class="row1">
    <div class="col-md-3">
        <div class="card ">
            <img src="https://th.bing.com/th/id/OIP.C5epuWt-aDZRBnTufx_0lQHaHy?pid=Api&rs=1" alt="Denim Jeans" style="width:100%">
            <h1>CHEESE</h1>
            <p class="price">₹250</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
        <img src="https://th.bing.com/th/id/OIP.FN1-4PJtw8XAMc6l3LQ1YgHaE7?pid=Api&rs=1" alt="Denim Jeans" style="width:100%">
            <h1>BREAD</h1>
            <p class="price">₹250</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
        <img src="https://krishijagran.com/media/2169/tomato.jpg" alt="Denim Jeans" style="width:100%">
            <h1>TOMATO</h1>
            <p class="price">₹250</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
        <img src="https://5.imimg.com/data5/VI/KO/MY-51265060/kelloggs-chocos-500x500.jpg" alt="Denim Jeans" style="width:100%">
            <h1>CHOCOS</h1>
            <p class="price">₹250</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>
</div>

<div class="row1">
    <div class="col-md-3">
        <div class="card">
        <img src="https://th.bing.com/th/id/OIP.l1xkKgzPpbqYT60v5aRqdwHaJu?pid=Api&rs=1" alt="Denim Jeans" style="width:100%">
            <h1>SPINACH</h1>
            <p class="price">$₹250</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
        <img src="https://th.bing.com/th/id/OIP.H-rlGJ6t9cbyfJKDXBplFgHaI5?pid=Api&rs=1" alt="Denim Jeans" style="width:100%">
            <h1>PEPSI</h1>
            <p class="price">$₹250</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
        <img src="https://th.bing.com/th/id/OIP.FZg23GSwIegM59xscGmmjAHaE7?pid=Api&rs=1" alt="Denim Jeans" style="width:100%">
            <h1>EGGS</h1>
            <p class="price">$₹250</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
        <img src="http://britannia.co.in/images/products/426x197/bourbon-orgina.png" alt="Denim Jeans" style="width:100%">
            <h1>BOURBUN</h1>
            <p class="price">$₹250</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>
</div>

</body>
</html>
