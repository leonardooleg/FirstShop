<!---FooterCart--->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://unpkg.com/vue"></script>
<script src="https://cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="/js/carousel.js"></script>

<script  type="application/javascript">
    var _token = '<?php echo csrf_token() ?>';

    $(document).ready(function() {
        var app = new Vue({
            el: '#app',
            data: {
                details: {
                    sub_total: 0,
                    total: 0,
                    total_quantity: 0,
                    checked_textiles: ''
                },
                itemCount: 0,
                items: [],
                item: {
                    b: 1,
                    id: '{{$product->id ?? ''}}',
                    name: '{{$product->title ?? ''}}',
                    price:  '{{$product->price ?? ''}}',
                    qty: 1,
                    checked_textiles: '',
                    attributes: {
                        size: '',
                        size_world: '',
                        size_rus: '',
                        color: '',
                        color_code: '',
                        color_name: '',
                        img: '{{$product->image ?? ''}}'
                    }

                },
                cartCondition: {
                    name: '',
                    type: '',
                    target: '',
                    value: '',
                    attributes: {
                        size: '',
                        size_world: '',
                        size_rus: '',
                        color: '',
                        color_code: '',
                        color_name: '',
                        img: ''
                    }
                },

                options: {
                    target: [
                        {label: 'Apply to SubTotal', key: 'subtotal'},
                        {label: 'Apply to Total', key: 'total'}
                    ]
                }
            },
            mounted:function(){
                this.loadItems();
            },
            methods: {
                addItem: function() {


                    var _this = this;

                    this.$http.post('/cart',{
                        _token:_token,
                        id:_this.item.id,
                        name:_this.item.name,
                        price:_this.item.price,
                        qty:_this.item.qty,
                        checked_textiles:_this.item.checked_textiles,
                        size:_this.item.attributes.size,
                        /*size_world:_this.item.attributes.size_world,
                        size_rus:_this.item.attributes.size_rus,*/
                        color:_this.item.attributes.color,
                        /*color_code:_this.item.attributes.color_code,
                        color_name:_this.item.attributes.color_name,*/
                        img:_this.item.attributes.img
                    }).then(function(success) {
                        console.log('add');
                        _this.loadItems();
                    }, function(error) {
                        console.log(error);

                    });
                    console.log('ok 2');
                },
                addCartCondition: function() {
                    console.log(3);
                    var _this = this;

                    this.$http.post('/cart/conditions',{
                        _token:_token,
                        name:_this.cartCondition.name,
                        type:_this.cartCondition.type,
                        target:_this.cartCondition.target,
                        value:_this.cartCondition.value,
                    }).then(function(success) {
                        _this.loadItems();
                    }, function(error) {
                        console.log(error);
                    });
                },
                clearCartCondition: function() {

                    var _this = this;

                    this.$http.delete('/cart/conditions?_token=' + _token).then(function(success) {
                        _this.loadItems();
                    }, function(error) {
                        console.log(error);
                    });
                },
                removeItem: function(id) {

                    var _this = this;

                    this.$http.delete('/cart/'+id,{
                        params: {
                            _token:_token
                        }
                    }).then(function(success) {
                        _this.loadItems();
                    }, function(error) {
                        console.log(error);
                    });
                },
                loadItems: function() {

                    var _this = this;

                    this.$http.get('/cart',{
                        params: {
                            limit:10
                        }
                    }).then(function(success) {
                        _this.items = success.body.data;
                        _this.itemCount = success.body.data.length;
                        _this.loadCartDetails();
                    }, function(error) {
                        console.log(error);
                    });
                },
                loadCartDetails: function() {

                    var _this = this;

                    this.$http.get('/cart/details').then(function(success) {
                        _this.details = success.body.data;
                    }, function(error) {
                        console.log(error);
                    });
                },
                updateItem: function (cart_id, actions) {
                    var _this = this;
                    this.$http.get('/cart/update/'+cart_id +'&'+actions,{
                    }).then(function(success) {
                        _this.loadItems();
                    }, function(error) {
                        console.log(error);
                    });
                }
            },
           /* computed: {
                sum() {
                    // Воспользуемся методом `reduce`.
                    // https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/Array/reduc
                    //console.log(item);

                    return 5
                    //return this.qty.reduce((price, qty) => this.price * Number(qty))
                }
            }*/

        });

        /*   var wishlist = new Vue({
               el: '#wishlist',
               data: {
                   details: {
                       sub_total: 0,
                       total: 0,
                       total_quantity: 0
                   },
                   itemCount: 0,
                   items: [],
                   item: {
                       id: '',
                       name: '',
                       price: 0.00,
                       qty: 1
                   }
               },
               mounted:function(){
                   this.loadItems();
               },
               methods: {
                   addItem: function() {

                       var _this = this;

                       this.$http.post('/wishlist',{
                           _token:_token,
                           id:_this.item.id,
                           name:_this.item.name,
                           price:_this.item.price,
                           qty:_this.item.qty
                       }).then(function(success) {
                           _this.loadItems();
                       }, function(error) {
                           console.log(error);
                       });
                   },
                   removeItem: function(id) {

                       var _this = this;

                       this.$http.delete('/wishlist/'+id,{
                           params: {
                               _token:_token
                           }
                       }).then(function(success) {
                           _this.loadItems();
                       }, function(error) {
                           console.log(error);
                       });
                   },
                   loadItems: function() {

                       var _this = this;

                       this.$http.get('/wishlist',{
                           params: {
                               limit:10
                           }
                       }).then(function(success) {
                           _this.items = success.body.data;
                           _this.itemCount = success.body.data.length;
                           _this.loadCartDetails();
                       }, function(error) {
                           console.log(error);
                       });
                   },
                   loadCartDetails: function() {

                       var _this = this;

                       this.$http.get('/wishlist/details').then(function(success) {
                           _this.details = success.body.data;
                       }, function(error) {
                           console.log(error);
                       });
                   }
               }
           });*/
        @if(preg_match("/product/", $_SERVER['REQUEST_URI']))

        window.onload = function(){
            var elem = document.querySelectorAll('[name="color"]'), i = elem.length;
            var color;
            while(i--){
                elem[i].onclick = function(i){
                    return function(){
                        //  let someTextiles = textiles.filter(item => item.textiles_color == this.value);
                        color= this.value;
                        // console.log(color+"-color");                 //цвет

                        var x = document.getElementsByName("size");
                        var a;
                        for (a = 0; a < x.length; a++) {
                            var tablesize= x[a].value;
                            // console.log(tablesize+"-size");         //розмер
                            var tempLsize = document.getElementById('lSize'+tablesize);
                            var tempsize = document.getElementById('size'+tablesize);
                            tempLsize.classList.add("disabled_size");
                            tempsize.disabled = true;
                            tempsize.checked = false;
                            var b;
                            for (b = 0; b < textiles.length; b++) {
                                if (textiles[b].textiles_size == tablesize && textiles[b].textiles_color == color) {
                                    tempLsize.classList.remove("disabled_size");
                                    tempsize.disabled = false;
                                }
                            }
                        }
                    };

                }(i);
            }
            var elemSize = document.querySelectorAll('[name="size"]'), c = elemSize.length;
            while(c--){
                elemSize[c].onclick = function(c){
                    return function(){
                        var sizes= this.value;
                        var d;
                        for (d = 0; d < textiles.length; d++) {
                            if (textiles[d].textiles_size == sizes && textiles[d].textiles_color == color) {
                                document.getElementById('checked_textiles').value=textiles[d].id;
                                Vue.set(app.item, 'checked_textiles', textiles[d].id);
                                /*console.log(textiles[d].id);*/
                            }
                        }
                    };
                }(c);
            }
        };
        @endif
    });

</script>


<!---FooterCart--->
