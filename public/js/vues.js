var _token = '<?php echo csrf_token() ?>';

$(document).ready(function() {
    console.log(1);
    var app = new Vue({
        el: '#app',
        data: {
            details: {
                sub_total: 0,
                total: 0,
                total_quantity: 0
            },
            itemCount: 0,
            items: [],
            item: {
                id: '{{$product->id ?? ''}}',
                name: '{{$product->title ?? ''}}',
                price:  '{{$product->id ?? ''}}',
                qty: 1,
                attributes: {
                    size: '',
                    color: ''
                }

            },
            cartCondition: {
                name: '',
                type: '',
                target: '',
                value: '',
                attributes: {
                    size: '',
                    color: ''
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
                console.log(2);
                var _this = this;

                this.$http.post('/cart',{
                    _token:_token,
                    id:_this.item.id,
                    name:_this.item.name,
                    price:_this.item.price,
                    qty:_this.item.qty,
                    size:_this.item.attributes.size,
                    color:_this.item.attributes.color
                }).then(function(success) {
                    _this.loadItems();
                }, function(error) {
                    console.log(error);
                });
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
            }
        }
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

});
