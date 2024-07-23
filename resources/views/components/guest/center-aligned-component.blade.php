<div
  class="flex flex-col place-content-between py-8 px-5 md:h-[100vh] md:flex-row md:justify-evenly md:px-24 md:py-12 {{ $bgColor }}">
  @if(isset($photo))
  <div 
    class="my-auto hidden md:block md:w-[45%]">
    <img class="mx-auto" 
      src="{{ $photo }}"
      width="{{ $photoWidth }}"
      alt="{{ $title }}"
    />
  </div>
  @endif

  <div
    class="text-center md:my-auto md:mt-auto md:w-[55%]">
    <div>
      <h1 
        class="md:br-normal text-3xl font-bold md:mb-5 md:mt-0 md:text-5xl">
        {{ $title }}
      </h1>

      <hr 
      class="mx-auto my-3 h-1.5 w-28 rounded border-0 bg-black"
      />  

      @if(isset($photo))
      <div 
        class="py-4 md:hidden">
        <img 
          class="mx-auto"
          width="250px"
          src="{{ $photo }}"
          alt="{{ $photoAlt }}"
        />
      </div>
      @endif

      <p
        class="md:mt-4 text-base md:text-xl">
        {{ $text }}
      </p>

      @if(isset($buttonText))
      <div
        class="mt-5">
        <a 
          class="mb-2 me-2 rounded-full bg-orange px-5 py-2.5 text-lg font-medium text-white"
          href="{{ $buttonHref }}" 
          type="button">
          {{ $buttonText }}
        </a>
      </div>
      @endif
    </div>
  </div>
</div>