<?php
include 'header.php';
require 'connect_db.php';
?>
<style>
    .theme {
        background: url(Images/theme2.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
        height: 300px;
        color:#FFD300;
        padding-top: 150px;
        text-align: center;
        text-decoration: none;

    }
</style>
<h1 class="theme">About Us</h1>
<div class="container" >
    <table class="table table-hover table-bordered">
        <tbody>


            <div class="row g-3">

                <div class="col">

                    <img src='image_DTB/CEO.jpg' class='img-responsive' alt='Image' width="100%">
                </div>
                <div class="col">
                    <h5 class="card-title">
                        <div class="container">
                            <div class="jumbotron">
                                <!-- <h4 style="color: black;">ABOUT US</h4><br> -->
                                <!-- <p > -->
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Venus Handicrafts
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Incepted in 2003, we, Venus Handicrafts, have achieved a remarkable
                                                position in the industry for manufacturing
                                                and supplying of a wide assortment of Glass Stones, Claws and Cup
                                                Chains, Claws and Cup Chains with Stones,
                                                Glass Beads, Plastic Beads and Metal Accessories. These are extremely
                                                appreciated for their durability and
                                                multipurpose uses. The offered products are fabricated using modern
                                                technology in conformity with industrial
                                                standards and guidelines and are broadly used in different industries.
                                                Our products are rigorously checked for
                                                their quality by experienced professional before dispatch. Our products
                                                are available to our respected customers
                                                at reasonable rates. We customize our products as per the client’s needs
                                                as well.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Why Us?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                We are the prime option of our clients for a qualitative variety of
                                                products. Owing to our quality-centric
                                                approach, we fabricate these products as per the customers' needs and
                                                requirements and provide the same to them
                                                at cost effective prices. There are several other features that have
                                                played a key role in becoming the first
                                                preference of our customers. Some of them are mentioned below:
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Client Satisfaction
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Owing to our fair business dealings and client-centric approach, we have
                                                expanded our customer base all across
                                                the nation. Our customized product option, on time delivery, economical
                                                prices and wide distribution network
                                                also assist us to achieve maximum satisfaction of our prominent patrons.
                                                In addition to this, we are also open
                                                to the queries and feedbacks given by our customers to enhance our
                                                offered variety. For our client’s
                                                convenience, we provide various easy payment modes.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                </div>

            </div>

        </tbody>
    </table>
</div>

<?php
include 'footer.php';
?>