<x-layouts.admin-layout>
    <h1>Clasificacion de ejercicios</h1>
    <div class="button-container">
        <button class="button button-primary" type="button" id="open-modal">Agregar clasificación <img
                src="{{ asset('assets/icons/admin/trophy.svg') }}" alt=""></button>
    </div>

    <div class="modal__container">
        <div action="" class="modal">
            <button id="close-modal" type="button">
                <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
            </button>

            <section class="content">
                <div class="form-container">
                    <div class="title">Registrar clasificación</div>
                    <div class="content">
                        <form action="" class="formularioAdmin una-col">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Nombre</span>
                                    <input type="text" id="nombre" required name="nombre"
                                        placeholder="Nombre de la clasificación">
                                </div>
                            </div>
                            <div class="input-box">
                                <span class="details">Descripción</span>
                                <textarea name="descripcion" id="descripcion" cols="30" required rows="5"
                                    class="form-control"
                                    placeholder="Descripción acerca de la clasificación"></textarea>
                            </div>
                            <div class="btn-form-admin">
                                <input type="submit" value="Registrar">
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
</x-layouts.admin-layout>