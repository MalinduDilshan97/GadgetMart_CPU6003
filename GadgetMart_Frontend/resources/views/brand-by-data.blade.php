<!DOCTYPE html>
<html lang="en">
@include('head')
<style>

    #pagination-demo1 {
        display: contents;
    }

    #pagination-demo1 ul {
        display: inline-block;
        padding: 0;
        margin: 0;
    }

    #pagination-demo1 li {
        display: inline;
    }

    #pagination-demo1 li {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .data-container {
        display: inline-flex;
    }

    .paginationjs {
        margin: auto;
        width: 25%;

    }

</style>
<body>
<div class="page-wrapper">
    @include('navbar')

    <main class="main">
        <input id="name" class="d-none" value="{{$name}}">
        <input id="brandId" class="d-none" value="{{$id}}">

        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Brand</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
                </ol>
            </div>
        </nav>

        <section class="container">
            <div class="row">
                <br>
                <br>
                <div class="data-container" id="abcde"></div>
                <div id="pagination-demo1"></div>
            </div>
        </section>
    </main>

    @include('footer')
</div><!-- End .page-wrapper -->

@include('othercontent')
</body>
<script src="https://pagination.js.org/dist/2.1.5/pagination.js"></script>
<script src="https://pagination.js.org/dist/2.1.5/pagination.min.js"></script>
<script>
    let subcat = [];

    function loadSubCategory() {
        $.ajax({
            url: baseurlAPI + 'subcategory',
            method: "GET",
            async: true,
            dataType: "json"

        }).done(function (resp) {
            for (let i in resp) {
                let response = resp[i];
                let name = response["name"];
                let id = response["id"];
                let category = response["category"];
                let subcategory = {
                    id: id,
                    name: name,
                    category: category
                }
                subcat.push(subcategory);
            }

        });
    }


    loadSubCategory();


    $(function () {
        let brandId = $('#brandId').val();
        (function (name) {
            var container = $('#pagination-' + name);
            let countfirst = 0;
            container.pagination({
                dataSource: baseurlAPI + 'item',
                locator: 'items',
                totalNumber: 120,
                pageSize: 20,
                ajax: {
                    beforeSend: function () {
                        container.prev().html('Loading data from API ...');
                    }
                },
                callback: function (response, pagination) {
                    window.console && console.log(22, response, pagination);
                    var dataHtml = '';

                    $.each(response, function (index, item) {
                        let id = item['id'];
                        let brand = item['brand'];
                        let subCategory = item['subCategory'];
                        let category = null;
                        for (let i in subcat) {
                            let response = subcat[i];
                            let subid = response["id"];
                            if (subid === subCategory) {
                                subCategory = response["name"];
                                // category = response["category"];
                            }

                        }

                        if (brand == brandId) {
                            countfirst++;
                            dataHtml += '' +
                                '<div class=\"product-default inner-quickview inner-icon col-xl-5col col-lg-3 col-md-4 col-6"\>\n' +
                                '<figure>\n' +
                                '<a href="#" onclick=\'loadsingledata("' + id + '")\'>\n' +
                                '<img src=' + item['imageUrl'] + ' alt="image">\n' +
                                '</a>\n' +
                                '<div class="btn-icon-group">\n' +
                                '<button class="btn-icon btn-add-cart"  onclick=\'addtoCart("' + id + '","' + item['name'] + '","' + item['price'] + '","' + item['imageUrl'] + '","' + item['itemtype'] + '")\' ><i class="icon-shopping-cart"></i></button>\n' +
                                '</div>\n' +
                                '<button onclick=\'loadsingledata("' + id + '")\' class="btn-quickview" title="Quick View">\n' +
                                'View Details</button>\n' +
                                '</figure>\n' +
                                '<div class="product-details">\n' +
                                '<div class="category-wrap">\n' +
                                '<div class="category-list">\n' +
                                '<a href="#" class="product-category">' + subCategory + '</a>\n' +
                                '</div>\n' +
                                '</div>\n' +
                                '<h2 class="product-title">\n' +
                                '<a href="#">' + item['name'] + '</a>\n' +
                                '</h2>\n' +
                                '<div class="price-box">\n' +
                                '   <span class="product-price">LKR ' + item['price'] + '</span>\n' +
                                '</div><!-- End .price-box -->\n' +
                                '</div><!-- End .product-details -->\n' +
                                '</div>';
                        }
                    });

                    if (countfirst == 0) {
                        dataHtml = "<div class=\"col-xs-12 col-lg-12\" data-animate='{\"class\":\"fadeInLeftBig\"}'>\n" +
                            "                        <div class=\"notfound-item\">No Ads Found</div>\n" +
                            "            </div>";
                    }

                    container.prev().html(dataHtml);
                }
            })
        })('demo1');
    })


    function loadsingledata(id) {
        window.location = baseurl + "single-item/" + id;
    }

    function addtoCart(newid, name, price, image, itemtype) {
        price = parseFloat(price);
        let item1 = {
            id: newid,
            name: name,
            price: price,
            qty: 1,
            image: image,
            itemtype: itemtype
        };
        var items = [];

        var storedNames = JSON.parse(localStorage.getItem("item"));
        if (storedNames === null) {
            items.push(item1);
            localStorage.setItem("item", JSON.stringify(items));
        } else {
            let result = true;
            for (let i in storedNames) {
                let response = storedNames[i];
                let id = response["id"];
                let aimageurl = response["image"];
                let aname = response["name"];
                let aprice = response["price"];
                let aqty = response["qty"];
                aqty = parseInt(aqty);
                let aitemtype = response["itemtype"];
                if (id == newid) {
                    result = false;
                    let item = {
                        id: id,
                        name: aname,
                        price: aprice,
                        qty: aqty + 1,
                        image: aimageurl,
                        itemtype: aitemtype
                    };
                    items.push(item);
                } else {
                    let item = {
                        id: id,
                        name: aname,
                        price: aprice,
                        qty: aqty,
                        image: aimageurl,
                        itemtype: aitemtype
                    };
                    items.push(item);
                }
            }
            if (result) {
                items.push(item1);
            }
            localStorage.removeItem("item");

            // storedNames.push(item);
            localStorage.setItem("item", JSON.stringify(items));
        }
        $('#addCartModal').modal('show');
    }

</script>
</html>
