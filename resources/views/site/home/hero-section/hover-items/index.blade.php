@if(isset($heroSection['hover-item'][0]))
    <x-hover-item :value="$heroSection['hover-item'][0]['value']" class="left-0 top-2.5 -translate-x-[40%] xl:-translate-x-[110%]" />
@endif
    
@if(isset($heroSection['hover-item'][1]))
    <x-hover-item :value="$heroSection['hover-item'][1]['value']" class="-left-8 top-1/2 -translate-y-1/2 -translate-x-[40%] xl:-translate-x-[110%]" />
@endif
    
@if(isset($heroSection['hover-item'][2]))
    <x-hover-item :value="$heroSection['hover-item'][2]['value']" class="left-0 bottom-2.5 -translate-x-[40%] xl:-translate-x-[110%]" />
@endif                
    
@if(isset($heroSection['hover-item'][3]))
    <x-hover-item :value="$heroSection['hover-item'][3]['value']" class="right-0 top-2.5 translate-x-[40%] xl:translate-x-[110%]" />
@endif
    
@if(isset($heroSection['hover-item'][4]))
    <x-hover-item :value="$heroSection['hover-item'][4]['value']" class="-right-8 top-1/2 -translate-y-1/2 translate-x-[40%] xl:translate-x-[110%]" />
@endif

@if(isset($heroSection['hover-item'][5]))
    <x-hover-item :value="$heroSection['hover-item'][5]['value']" class="right-0 bottom-2.5 translate-x-[40%] xl:translate-x-[110%]" />
@endif