<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        .gallery-main {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .image-holder {
            margin: 10px;
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            text-align: center;
        }
        .image-holder img {
            width: 150px;
            height: 200px;
            object-fit: cover;
        }
        .desc {
            margin-top: 10px;
        }
        .buy-btn {
            background: #28a745;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 14px;
        }
        .buy-btn:hover {
            background: #218838;
        }

        /* Form Popup Styling */
        .form-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            width: 300px;
            z-index: 1000;
        }
        .form-popup h2 {
            margin-top: 0;
        }
        .form-popup input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-popup button {
            width: 100%;
            padding: 8px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        .form-popup button:hover {
            background: #0056b3;
        }
        #close-btn {
            background: #dc3545 !important;
        }
    </style>
</head>
<body>

<div class="gallery-main">
    <h2>Adventure Books</h2>
    <div class="gallery">
        <div class="image-holder">
            <img src="https://tse4.mm.bing.net/th?id=OIP.wxSklXRuxRUgtUguejI6oQHaLG&pid=Api&P=0&h=180""  alt="Book 1">
            <div class="desc">
                <p>Price: RS370</p>
                <button class="buy-btn" data-product="Adventure book" data-price="400">Buy Now</button>
            </div>
        </div>

        
        <div class="image-holder">
            <img src="https://tse1.mm.bing.net/th?id=OIP.ilwkGHuv48R2LV70hNh1QQHaKO&pid=Api&P=0&h=180" alt="Book 1">
            <div class="desc">
                <p>Price: RS270</p>
                <button class="buy-btn" data-product="Adventure Book" data-price="200">Buy Now</button>
            </div>
        </div>


        <div class="image-holder">
            <img src="https://tse2.mm.bing.net/th?id=OIP.I6wNsM2--7jpEhQboa7SNgHaLX&pid=Api&P=0&h=180"  alt="Book 1">
            <div class="desc">
                <p>Price: RS400</p>
                <button class="buy-btn" data-product="Adventure  Book" data-price="250">Buy Now</button>
            </div>
        </div>

        <div class="image-holder">
            <img src="https://tse2.mm.bing.net/th?id=OIP.IIIPIPZYMBOJgxFfWGRtBAHaHa&pid=Api&P=0&h=180"  alt="Book 1">
            <div class="desc">
                <p>Price: RS350</p>
                <button class="buy-btn" data-product="Adventure  Book" data-price="250">Buy Now</button>
            </div>
        </div>

        

        <div class="image-holder">
            <img src="https://m.media-amazon.com/images/I/51eLsxoKvFL.jpg"  alt="Book 1">
            <div class="desc">
                <p>Price: RS250</p>
                <button class="buy-btn" data-product="Adventure  Book" data-price="250">Buy Now</button>
            </div>
        </div>

        <div class="image-holder">
            <img src="https://www.bookcoversart.com/wp-content/uploads/2020/12/Action_Adventure_Book_Cover_Jake_Raven_1.jpg"  alt="Book 1">
            <div class="desc">
                <p>Price: RS350</p>
                <button class="buy-btn" data-product="Adventure  Book" data-price="250">Buy Now</button>
            </div>
        </div>

        <div class="image-holder">
            <img src="https://i.pinimg.com/736x/78/7b/ae/787bae01eb18223b05bb23df4c919f8c--adventure-books-adventure-stories.jpg"  alt="Book 1">
            <div class="desc">
                <p>Price: RS400</p>
                <button class="buy-btn" data-product="Adventure  Book" data-price="250">Buy Now</button>
            </div>
        </div>

        <div class="image-holder">
            <img src="https://s3.amazonaws.com/bookzio-01/2018/04/5ae37f788892d.jpg"  alt="Book 1">
            <div class="desc">
                <p>Price: RS700</p>
                <button class="buy-btn" data-product="Adventure  Book" data-price="250">Buy Now</button>
            </div>
        </div>

        <div class="image-holder">
            <img src="https://knowledgeworld.com.pk/wp-content/uploads/2019/12/91Qy0FUiUSL-675x1024.jpg"  alt="Book 1">
            <div class="desc">
                <p>Price: RS200</p>
                <button class="buy-btn" data-product="Adventure  Book" data-price="250">Buy Now</button>
            </div>
        </div>

        <div class="image-holder">
            <img src="https://i.pinimg.com/originals/d9/10/eb/d910eb7476abb428dd06fa57de50d17a.jpg"  alt="Book 1">
            <div class="desc">
                <p>Price: RS250</p>
                <button class="buy-btn" data-product="Adventure  Book" data-price="250">Buy Now</button>
            </div>
        </div>

        
        <div class="image-holder">
            <img src="https://i.pinimg.com/originals/53/18/ea/5318ea14692ad4c26523a27f8af5729a.png"  alt="Book 1">
            <div class="desc">
                <p>Price: RS350</p>
                <button class="buy-btn" data-product="Adventure Book" data-price="350">Buy Now</button>
            </div>
        </div>
    </div>
</div>
                 


<div class="gallery-main">
    <h2>Thriller  Books</h2>
    <div class="gallery">
        <div class="image-holder">
            <img src="https://tse3.mm.bing.net/th?id=OIP.tMHicPVU6wVP7rEhVzb-JgHaLH&pid=Api&P=0&h=180"  alt="Book 1">
            <div class="desc">
                <p>Price: RS300</p>
                <button class="buy-btn" data-product="Thriller book" data-price="400">Buy Now</button>
            </div>
        </div>

        
        <div class="image-holder">
            <img src="https://tse2.mm.bing.net/th?id=OIP.F23lLhPdFgj0FgSkL2zLagHaLG&pid=Api&P=0&h=180"  alt="Book 2">
            <div class="desc">
                <p>Price: RS240</p>
                <button class="buy-btn" data-product="Thriller Book" data-price="200">Buy Now</button>
            </div>
        </div>


        <div class="image-holder">
            <img src="https://tse4.mm.bing.net/th?id=OIP.AnjHEC7tpVrwpp9j4X8QAAHaLM&pid=Api&P=0&h=180"  alt="Book 3">
            <div class="desc">
                <p>Price: RS340</p>
                <button class="buy-btn" data-product="Thriller  Book" data-price="250">Buy Now</button>
            </div>
        </div>

        


        
        <div class="image-holder">
            <img src="https://tse1.mm.bing.net/th?id=OIP.P9bW-BW9o-wpsFow4hEL3gAAAA&pid=Api&P=0&h=180"  alt="Book 4">
            <div class="desc">
                <p>Price: RS240</p>
                <button class="buy-btn" data-product="Thriller Book" data-price="350">Buy Now</button>
            </div>
        </div>
    </div>
</div>
                              
                                        


<div class="gallery-main">
    <h2>Comedy Books</h2>
    <div class="gallery">
        <div class="image-holder">
            <img src="https://tse3.mm.bing.net/th?id=OIP.cJxhqrZ2xjnkG2vmcEascwHaLH&pid=Api&P=0&h=180"  alt="Book 1">
            <div class="desc">
                <p>Price: RS120</p>
                <button class="buy-btn" data-product="comedy book" data-price="400">Buy Now</button>
            </div>
        </div>

        
        <div class="image-holder">
            <img src="https://tse4.mm.bing.net/th?id=OIP.qAK_YPy9vvCvofQkLFSHhQAAAA&pid=Api&P=0&h=180" alt="Book 1">
            <div class="desc">
                <p>Price: RS200</p>
                <button class="buy-btn" data-product="comedy Book" data-price="200">Buy Now</button>
            </div>
        </div>


        <div class="image-holder">
            <img src="https://tse4.mm.bing.net/th?id=OIP.sDZ216OrQFgmRe__LwocewHaLX&pid=Api&P=0&h=180"  alt="Book 1">
            <div class="desc">
                <p>Price: RS130</p>
                <button class="buy-btn" data-product="comedy  Book" data-price="250">Buy Now</button>
            </div>
        </div>

        
        <div class="image-holder">
            <img src="https://tse3.mm.bing.net/th?id=OIP.74EIznZlMX0rtIrY1sYUdgHaLH&pid=Api&P=0&h=180"  alt="Book 1">
            <div class="desc">
                <p>Price: RS200</p>
                <button class="buy-btn" data-product="comedy Book" data-price="350">Buy Now</button>
            </div>
        </div>
    </div>
</div>
                              
                                        
<div class="gallery-main">
    <h2>Engineering  Books</h2>
    <div class="gallery">
        <div class="image-holder">
            <img src="https://tse4.mm.bing.net/th?id=OIP.UROw4BE_OcL_4LMnHgl1iQHaLY&pid=Api&P=0&h=180"  alt="Book 1">
            <div class="desc">
                <p>Price: RS240</p>
                <button class="buy-btn" data-product="Engineering book" data-price="400">Buy Now</button>
            </div>
        </div>

        
        <div class="image-holder">
            <img src="https://tse3.mm.bing.net/th?id=OIP.kfcMfSTBH11QxEd5X5I9kQHaLG&pid=Api&P=0&h=180""  alt="Book 1">
            <div class="desc">
                <p>Price: RS360</p>
                <button class="buy-btn" data-product="Engineering Book" data-price="200">Buy Now</button>
            </div>
        </div>


        <div class="image-holder">
            <img src="https://tse2.mm.bing.net/th?id=OIP.5amc_1Ho7hfP87tUfbkv6AHaJP&pid=Api&P=0&h=180"  alt="Book 1">
            <div class="desc">
                <p>Price: RS370</p>
                <button class="buy-btn" data-product="Engineering  Book" data-price="250">Buy Now</button>
            </div>
        </div>

        
        <div class="image-holder">
            <img src="https://tse4.mm.bing.net/th?id=OIP.5t6Q6iZxfGJ_q_rk5E0OkQAAAA&pid=Api&P=0&h=180"  alt="Book 1">
            <div class="desc">
                <p>Price: RS270</p>
                <button class="buy-btn" data-product="Engineering Book" data-price="350">Buy Now</button>
            </div>
        </div>
    </div>
</div>
                              
                                        




                                            


            

                                            

<div id="form-container" class="form-popup">
    <form id="purchase-form">
        <h2>Enter Your Details</h2>
        <input type="hidden" name="product" id="product">
        <input type="hidden" name="price" id="price">

        <label for="name">Full Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>

        <button type="submit">Submit Order</button>
        <button type="button" id="close-btn">Close</button>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const buyButtons = document.querySelectorAll(".buy-btn");
        const formContainer = document.getElementById("form-container");
        const closeBtn = document.getElementById("close-btn");
        const productInput = document.getElementById("product");
        const priceInput = document.getElementById("price");
        const form = document.getElementById("purchase-form");

        buyButtons.forEach(button => {
            button.addEventListener("click", function () {
                const product = this.getAttribute("data-product");
                const price = this.getAttribute("data-price");

                productInput.value = product;
                priceInput.value = price;

                formContainer.style.display = "block";
            });
        });

        closeBtn.addEventListener("click", function () {
            formContainer.style.display = "none";
        });

        form.addEventListener("submit", function (event) {
            event.preventDefault();

            const formData = new FormData(form);
            
            fetch("process.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                formContainer.style.display = "none";
            })
            .catch(error => console.error("Error:", error));
        });
    });
</script>

</body>
</html>
