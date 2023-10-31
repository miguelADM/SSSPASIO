<x-layouts.user-layout>
    <section>
      <h3 class="home__title">El top de ganadores</h3>
  
      <article>
        <div class="winners__options">
          <button class="active">Este Mes</button>
          <button>Este Año</button>
        </div>
        <article class="winners__container">
          <div class="winners__top">
            {{-- top 2 --}}
            <div class="winner">
              <picture class="winner__picture">
                <img src="{{ asset('assets/icons/home/winner2.svg') }}" alt="" class="winner__crown">
                <img src={{ asset('assets/images/home/avatar2.webp') }} alt="" class="winner__avatar"
                  style="border-color: #45b3ff">
                <div class="winner__position">
                  <img src="{{ asset('assets/icons/home/diamond.svg') }}" alt="">
                  <span>2</span>
                </div>
              </picture>
              <p class="winner__name">Angel</p>
              <span class="winner__points">
                4
                <img src="{{ asset('assets/icons/home/crown-color.svg') }}" alt="">
              </span>
            </div>
            {{-- top 1 --}}
            <div class="winner one">
              <picture class="winner__picture">
                <img src="{{ asset('assets/icons/home/winner1.svg') }}" alt="" class="winner__crown">
                <img src={{ asset('assets/images/home/avatar1.webp') }} alt="" class="winner__avatar"
                  style="border-color: #FFCA28">
                <div class="winner__position">
                  <img src="{{ asset('assets/icons/home/diamond.svg') }}" alt="">
                  <span>1</span>
                </div>
              </picture>
              <p class="winner__name">Angel</p>
              <span class="winner__points">
                4
                <img src="{{ asset('assets/icons/home/crown-color.svg') }}" alt="">
              </span>
            </div>
            {{-- top 3 --}}
            <div class="winner">
              <picture class="winner__picture">
                <img src="{{ asset('assets/icons/home/winner3.svg') }}" alt="" class="winner__crown">
                <img src={{ asset('assets/images/home/avatar3.webp') }} alt="" class="winner__avatar"
                  style="border-color: #ee933f">
                <div class="winner__position">
                  <img src="{{ asset('assets/icons/home/diamond.svg') }}" alt="">
                  <span>3</span>
                </div>
              </picture>
              <p class="winner__name">Angel</p>
              <span class="winner__points">
                4
                <img src="{{ asset('assets/icons/home/crown-color.svg') }}" alt="">
              </span>
            </div>
          </div>
          <div class="winners__list">
  
            <div class="divTable">
              <div class="divTableBody">
                <div class="divTableRow">
                  <div class="divTableCell">#4</div>
                  <div class="divTableCell">
                    <div class="winner__table-name">
                      <img src={{ asset('assets/images/home/avatar3.webp') }} alt="" class="winner__avatar" />
                      <span>Juan Carlos Bodoque</span>.
                    </div>
                  </div>
                  <div class="divTableCell">
                    <div class="winner__table-points">
                      <span>3</span>
                      <img src="{{ asset('assets/icons/home/crown-color.svg') }}" alt="">
                    </div>
                  </div>
                </div>
                <div class="divTableRow">
                  <div class="divTableCell">#5</div>
                  <div class="divTableCell">
                    <div class="winner__table-name">
                      <img src={{ asset('assets/images/home/avatar3.webp') }} alt="" class="winner__avatar" />
                      <span>Juan Carlos Bodoque</span>.
                    </div>
                  </div>
                  <div class="divTableCell">
                    <div class="winner__table-points">
                      <span>3</span>
                      <img src="{{ asset('assets/icons/home/crown-color.svg') }}" alt="">
                    </div>
                  </div>
                </div>
                <div class="divTableRow">
                  <div class="divTableCell">#6</div>
                  <div class="divTableCell">
                    <div class="winner__table-name">
                      <img src={{ asset('assets/images/home/avatar3.webp') }} alt="" class="winner__avatar" />
                      <span>Juan Carlos Bodoque</span>.
                    </div>
                  </div>
                  <div class="divTableCell">
                    <div class="winner__table-points">
                      <span>3</span>
                      <img src="{{ asset('assets/icons/home/crown-color.svg') }}" alt="">
                    </div>
                  </div>
                </div>
                <div class="divTableRow">
                  <div class="divTableCell">#7</div>
                  <div class="divTableCell">
                    <div class="winner__table-name">
                      <img src={{ asset('assets/images/home/avatar3.webp') }} alt="" class="winner__avatar" />
                      <span>Juan Carlos Bodoque</span>.
                    </div>
                  </div>
                  <div class="divTableCell">
                    <div class="winner__table-points">
                      <span>3</span>
                      <img src="{{ asset('assets/icons/home/crown-color.svg') }}" alt="">
                    </div>
                  </div>
                </div>
                <div class="divTableRow">
                  <div class="divTableCell">#8</div>
                  <div class="divTableCell">
                    <div class="winner__table-name">
                      <img src={{ asset('assets/images/home/avatar3.webp') }} alt="" class="winner__avatar" />
                      <span>Juan Carlos Bodoque</span>.
                    </div>
                  </div>
                  <div class="divTableCell">
                    <div class="winner__table-points">
                      <span>3</span>
                      <img src="{{ asset('assets/icons/home/crown-color.svg') }}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
        </article>
      </article>
    </section>
  </x-layouts.user-layout>