<div class="height-100 container d-flex justify-content-center align-items-center">
    <div class=" p-3">


        <div class="mt-1 d-flex justify-content-between align-items-center">
            <div class="small-ratings">
{{--                {{ceil(->rating)}}--}}
                @if(count($item->rating))
                @for($i = 0;$i<ceil($item->rating[0]->rating) ; $i++)
                    <i class="fa fa-star rating-color"></i>
                @endfor
                @for($i = 0;$i<5-ceil($item->rating[0]->rating) ; $i++)
                    <i class="fa fa-star"></i>
                @endfor
                @else
                    @for($i = 0;$i<5 ; $i++)
                        <i class="fa fa-star"></i>
                    @endfor
                @endif
            </div>
        </div>

    </div>
</div>
