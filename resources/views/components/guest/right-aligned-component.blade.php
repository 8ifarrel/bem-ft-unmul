<div
  class="flex flex-col-reverse place-content-between px-5 py-8 md:h-[100vh] md:flex-row md:justify-evenly md:px-24 md:py-12 {{ $bgColor }}">
  <div 
    class="mx-auto text-center md:my-auto md:mt-auto md:w-[55%] md:text-end" 
    data-aos="fade-left">
    <h1 
      class="md:br-normal text-3xl font-bold md:mb-5 md:mt-0 md:text-5xl">
      {{ $title }}
    </h1>

    <hr
      class="mx-auto my-3 flex h-1.5 w-28 justify-end rounded border-0 bg-black md:my-5 md:me-0"
    />

    <div 
      class="py-4 md:hidden">
      <img 
        class="mx-auto"
        width="250px"
        src="{{ $photo }}"
        alt="{{ $photoAlt }}"
      />
    </div>

    <p 
      class="md:mt-4 text-base md:text-xl">
      {{ $text }}
    </p>

    @if(isset($buttonText))
    <div 
      class="mt-5">
      <a 
        class="rounded-full bg-orange px-5 py-2.5 text-lg font-medium text-white"
        href="{{ $buttonHref }}"
        type="button">
        {{ $buttonText }}
      </a>
    </div>
    @endif
  </div>

  <div
    class="my-auto hidden md:block md:w-[45%]"
    data-aos="fade-left">
    <img class="mx-auto" 
      src="{{ $photo }}"
      width="{{ $photoWidth }}"
      alt="{{ $photoAlt }}"
    />
  </div>
</div>