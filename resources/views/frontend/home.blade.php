@extends('frontend.layouts.app')

@section('title')
    Trouvez une maison en un click
@endsection

@section('content')

    @include('frontend.components.modal_search')

    @include('frontend.partials.carousels')

    @include('frontend.components._section')




    <section class="lg:px-28 md:px-12 px-6 py-16">
        @if ($apartments->count() > 0)
            <div class="container m-auto space-y-8">
                <div>
                    <h4 class="mb-8 sm:text-2xl text-xl text-gray-800">Nouvelles maisons</h4>
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                        @foreach($apartments as $apartment)
                            @include('frontend.components._card')
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div class="sm:w-6/12 h-screen m-auto flex items-center justify-center">
                <div class="space-y-3">
                    <img src="{{ asset('app/images/icons/open-box.png') }}" class="sm:w-40 w-32 m-auto" alt="">
                    <p class="text-lg text-gray-600 text-center">Aucune maison n'est disponible</p>
                </div>
            </div>
        @endif
        <div class="flex flex-col gap-4 mt-16">
            <div class="flex justify-center">
                {{ $apartments->links('users.component._pagination') }}
            </div>
        </div>

    @if(count($best_houses)>0)
        @include('apps.partials.best_note_house_conteneur')
    @endif
    @if(count($best_commissionnaires)>0)
        @include('apps.partials.conteneur_best_commission')
    @endif

    @if(count($temoignages)>0)

      <!-- =============section testimonials============= -->
  <section class="flex w-full overflow-hidden justify-center py-8">

<div
    class="relative w-full max-w-screen-lg lg:max-w-screen-2xl px-4 xs:px-6 sm:px-10 lg:px-12 xl:px-16 flex flex-col gap-6 lg:gap-8">
    <div class="w-full flex">
        <h1 class="text-2xl md:text-3xl font-semibold text-gray-600">Ce qu'ils disent de KaribuKwako</h1>
    </div>

    <div class="flex flex-col gap-4">
        <div class="swiper swipertestimonial">
            <div class="swiper-wrapper">
      @foreach($temoignages as $temoignage)
        @include('apps.components.note_user')
      @endforeach

        </div>
        </div>


        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div
                    class="swip-prev-testim z-500 p-2 transition  hover:bg-purple-700 focus:bg-purple-500 focus:border-transparent rounded bg-purple-100 text-purple-600 hover:text-white border-2 border-gray-100 hover:border-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
                <div
                    class="swip-next-testim z-500 p-2 transition  hover:bg-purple-700 focus:bg-purple-500 focus:border-transparent rounded bg-purple-100 text-purple-600 hover:text-white border-2 border-gray-100 hover:border-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

</div>
</section>
<!-- =============end section testimonials============= -->

    @endif

    </section>

@endsection
