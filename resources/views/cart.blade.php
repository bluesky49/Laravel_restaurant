@extends('layouts.main')
@section('title', 'Your Cart')

@section('content')
 
<div class="container">
   <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Product</th>
                    <th></th>
                    <th class="text-center"></th>
                    <th class="text-center">Total</th>
                    <th> </th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{ asset('/storage/images')."/".$item->menu->image}}" style="width: 100px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">{{$item->menu->name}}</a></h4>
                                </div>
                            </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>${{$item->menu->price}}</strong></td>
                        <td class="col-sm-1 col-md-1">
                            <a href="/removeItem/{{$item->id}}"> <button type="button" class="btn btn-danger">
                                    <span class="fa fa-remove"></span> Remove
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
 
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td><h3>Total</h3></td>
                    <td class="text-right"><h3><strong>${{$total}}</strong></h3></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                        <a href="/"> <button type="button" class="btn btn-default">
                                <span class="fa fa-shopping-cart"></span> Continue Shopping
                            </button>
                        </a></td>
                    <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="fa fa-play"></span>
                        </button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

               
                 
                    
                
@endsection