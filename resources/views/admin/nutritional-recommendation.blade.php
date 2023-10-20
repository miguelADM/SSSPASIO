<x-layouts.admin-layout>
    <h1>Recomendación nutricional</h1>
    <div class="button-container">
        <button class="button button-primary" type="button" id="open-modal">Agregar dieta <img
                src="{{ asset('assets/icons/admin/food.svg') }}" alt=""></button>
    </div>

    <div class="modal__container">
        <div action="" class="modal">
            <button id="close-modal" type="button">
                <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
            </button>

            <section class="content">
                <div class="form-container">
                    <div class="title">Registrar dieta</div>
                    <div class="content">
                        <form action="" class="formularioAdmin una-col">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Nombre</span>
                                    <input type="text" id="nombre" required name="nombre"
                                        placeholder="Nombre de la dieta">
                                </div>
                                <div class="input-box">
                                    <span class="details">Descripción</span>
                                    <textarea class="ckeditor" name="descripcion" id="editor1" required cols="30"
                                        rows="10" class="form-control" placeholder="Descripción de la dieta"></textarea>
                                </div>
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