<div class="height-100 container d-flex justify-content-center align-items-center">
    <div class=" p-3">


        <div class="mt-1 d-flex justify-content-between align-items-center">
            <div class="small-ratings">
                @for($i = 0;$i<$item->rate ; $i++)
                    <i class="fa fa-star rating-color"></i>
                @endfor
                @for($i = 0;$i<5-$item->rate ; $i++)
                    <i class="fa fa-star"></i>
                @endfor
            </div>
        </div>

    </div>
</div>
