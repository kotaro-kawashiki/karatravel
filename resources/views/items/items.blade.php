
<div class="container">
    
    <div class="col-xl-12"style="margin-bottom:50px;"></div>
    
    <div class="row" style="width:1300px; padding-left:10px;">
        <div class="col-xl-7">
            @include('items.piechart')
        </div>
        <div class="col-xl-5" style="background-color:pink; height:550px;">
        lists
        </div>
    </div>
    <div class="row" style="width:1300px;">
        <div class="col-xl-9" style="background-color:purple; height:100px;">
            total amount of this month
        </div>
        <div class="col-xl-3" style="background-color:red; height:100px;">
            shinnki-nyuuryoku
        </div>
    </div>
    
</div>
 
        
        

{!! link_to_route('items.create', 'create') !!}
<br>
{!! link_to_route('items.show', 'show') !!}

