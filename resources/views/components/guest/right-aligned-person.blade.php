<div 
  class="flex flex-col place-content-between pt-8 px-5 md:pt-0 md:h-[100vh] md:flex-row md:justify-evenly md:px-24 {{ $bgColor }}">
  <div 
    class="text-center md:my-auto md:me-7 md:mt-auto md:w-[55%] md:text-end"
    data-aos="fade-left">
    <h1 
      class="md:br-normal text-3xl font-bold md:mb-2 md:mt-0 md:text-5xl ">
      {{ $title }}
    </h1>

    <h2
      class="font-semibold md:mb-5 md:text-3xl">
      {{ $name }}
    </h2>

    <hr
      class="mx-auto my-3 h-1.5 w-28 rounded border-0 bg-black md:me-0"
    />

    <p 
      class="px-5 md:mt-4 md:px-0 text-base md:text-xl">
      {{ $text }}
    </p>
  </div>

  <div 
    class="flex h-auto md:relative md:w-[45%] md:overflow-hidden"
    data-aos="fade-left">
    <img
      class="mx-auto mt-5 w-[80%] md:absolute md:top-10 md:h-auto md:w-full"
      src="{{ $photo }}"
      alt="{{ $photoAlt }}"
    />
  </div>
</div>