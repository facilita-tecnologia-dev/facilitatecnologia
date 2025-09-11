<x-layouts.app>
    <x-section.header :companyInfos="$companyInfos" />

    @if($heroSection)
        @include('site.home.hero-section.index', compact('heroSection'))
    @endif

    @if($ourPartners)
        @include('site.home.our-partners.index', compact('ourPartners'))
    @endif
        
    @if($ourHistoryNumbers)
        @include('site.home.our-history-numbers.index', compact('ourHistoryNumbers'))
    @endif


    @include('site.home.featured-services.index')


    @if($ourPurpose)
        @include('site.home.our-purpose.index', compact('ourPurpose'))
    @endif
        
    @if($CTABanner)
        @include('site.home.cta-banner.index', compact('CTABanner'))
    @endif
        
    @if($testimonials)
        @include('site.home.testimonials.index', compact('testimonials'))
    @endif

    <x-section.footer :companyInfos="$companyInfos"  />
</x-layouts.app>