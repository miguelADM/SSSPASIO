<x-layouts.admin-layout>
    <h1>Tips</h1>
    <div class="button-container">
        <button class="button button-primary" type="button" id="open-modal">Agregar tips <img
                src="{{ asset('assets/icons/admin/tips.svg') }}" alt=""></button>
    </div>

    <div class="modal__container">
        <div action="" class="modal">
            <button id="close-modal" type="button">
                <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
            </button>

            <section class="content">
                <div class="form-container">
                    <div class="title">Registrar tips</div>
                    <div class="content">
                        <form action="" class="formularioAdmin una-col">

                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Título</span>
                                    <input type="text" id="nombre" required name="nombre" placeholder="Título del tip">
                                </div>
                                <div class="input-box">
                                    <span class="details">Categoría</span>
                                    <select id="cat" required name="cat">
                                        <option disabled selected value>Seleccionar...</option>
                                        <option value="Tips">Tips</option>
                                        <option value="Enterate">Enterate</option>
                                        <option value="Motivate">Motivate</option>
                                        <option value="Algo Más">Algo Más</option>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <span class="details">Imagen</span>
                                        <input type="file" accept="image/jpg" class="custom-file-input" required
                                            id="exampleInputFile" name="jpg">
                                </div>
                            </div>
                            <div class="input-box">
                                <span class="details">Contenido</span>
                                <textarea class="ckeditor" name="contenido" id="editor1" rows="10" cols="80"
                                    required="" placeholder="Contenido del artículo"></textarea>
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