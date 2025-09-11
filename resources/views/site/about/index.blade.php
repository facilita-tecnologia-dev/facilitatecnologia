<x-layouts.app>

    <x-section.header :companyInfos="$companyInfos" />

    @if($timeline)
        @include('site.about.timeline.index', compact('timeline'))
    @endif

    @if($ourPurpose)
       @include('site.home.our-purpose.index', compact('ourPurpose'))
    @endif

    @if($ourBusiness)
        @include('site.about.our-business.index', compact('ourBusiness'))
    @endif

    @if($ourPartners)
       @include('site.home.our-partners.index', compact('ourPartners'))
    @endif

    <x-section.footer :companyInfos="$companyInfos"  />
</x-layouts.app>