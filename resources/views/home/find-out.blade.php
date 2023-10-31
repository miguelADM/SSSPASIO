<x-layouts.user-layout>

    <div class="blog__sections">
        <section id="blog__article" class="blog__content">

            <div class="article__container">

                <div class="article__header">
                    <div class="article__title">
                        <h2>Entérate de nuestras noticias</h2>
                    </div>
                    <div class="article__data">
                        <p>25 de Octubre 2023 <span></span> Ssspasio</p>
                    </div>
                    <img src="{{ asset('assets/images/home/enterateBlog.jpg') }}" alt="Entérate">
                </div>

                <div class="main__article">
                    <p style="text-align:justify"><big>Por este medio te compartiremos todas las actividades y eventos
                            que tendremos, los cuales ser&aacute;n solo para nuestros usuarios.</big></p>

                    <p style="text-align:justify"><big>Sin embargo, algunos eventos y/o actividades ser&aacute;n para
                            todo p&uacute;blico,las cuales se difundir&aacute;n a traves de nuestras diversas redes
                            sociales, por lo que podr&aacute;s invitar a tus familiares y amigos a que se integren a
                            esta gran comunidad .</big></p>

                    <p style="text-align:justify"><big>Revisa este apartado&nbsp;para cuando tengamos algo que
                            decirte.</big></p>

                    <p style="text-align:justify">​</p>
                </div>

            </div>

        </section>

        <section id="blog__side-links" class="blog__content">
            <div class="links__container">

                <div class="links__title">
                    <h3>Articulos más leídos</h3>
                </div>

                <div class="link__card">
                    <img src="{{ asset('assets/images/home/1.webp') }}" alt="Algo más">
                    <div class="link__card-text">
                        <h5>Algo más</h5>
                        <p>¿Conoces a alguien que no suelta su teléfono celular? Mantente al tanto de los riesgos del
                            uso excesivo
                            del celular.</p>
                        <a href="/something-more">Saber más</a>
                    </div>
                </div>

                <div class="link__card">
                    <img src="{{ asset('assets/images/home/2.webp') }}" alt="Motívate">
                    <div class="link__card-text">
                        <h5>Motívate</h5>
                        <p>Aprende a como mantener la motivación necesaria para darle un cambio a tu vida.</p>
                        <a href="/motivation">Saber más</a>
                    </div>
                </div>

                <div class="link__card">
                    <img src="{{ asset('assets/images/home/tips.webp') }}" alt="Tips">
                    <div class="link__card-text">
                        <h5>Tips</h5>
                        <p>Descubre los tips más importantes para mejorar y mantener tus resultados.</p>
                        <a href="/tips">Saber más</a>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <section id="related__blogs">
        <div class="links__title">
            <h3>Artículos relacionados</h3>
        </div>

        <div class="related__blogs-container">

            <div class="related__card">
                <img src="{{ asset('assets/images/home/1.webp') }}" alt="Algo más">
                <div class="related__card-text">
                    <h5>Algo Más</h5>
                    <p>¿Conoces a alguien que no suelta su teléfono celular? Mantente al tanto de los riesgos
                        del uso excesivo
                        del celular.
                    </p>
                </div>
                <div class="related__card-data">
                    <p>25 de Octubre 2023</p>
                    <a href="/something-more">Saber más</a>
                </div>
            </div>

            <div class="related__card">
                <img src="{{ asset('assets/images/home/2.webp') }}" alt="Motivate">
                <div class="related__card-text">
                    <h5>Motívate</h5>
                    <p>Aprende a como mantener la motivación necesaria para darle un cambio a tu vida.</p>
                </div>
                <div class="related__card-data">
                    <p>25 de Octubre 2023</p>
                    <a href="/motivation">Saber más</a>
                </div>
            </div>

            <div class="related__card">
                <img src="{{ asset('assets/images/home/tips.webp') }}" alt="Tips">
                <div class="related__card-text">
                    <h5>Tips</h5>
                    <p>Descubre los tips más importantes para mejorar y mantener tus resultados.</p>
                </div>
                <div class="related__card-data">
                    <p>25 de Octubre 2023</p>
                    <a href="/tips">Saber más</a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.user-layout>
