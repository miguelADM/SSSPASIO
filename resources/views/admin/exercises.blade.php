<x-layouts.admin-layout>
    <h1>Ejercicios</h1>
    <div class="button-container">
        <button class="button button-primary" type="button" id="open-modal">Agregar ejercicio <img
                src="{{ asset('assets/icons/admin/weights.svg') }}" alt=""></button>
    </div>

    <div class="modal__container">
        <div action="" class="modal">
            <button id="close-modal" type="button">
                <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
            </button>

            <section class="content">
                <div class="form-container">
                    <div class="title">Registrar ejercicio</div>
                    <div class="content">
                        <form action="" class="formularioAdmin dos-col">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Nombre</span>
                                    <input type="text" id="nombre" name="nombre" placeholder="Nombre del ejercicio"
                                        required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Descripción</span>
                                    <textarea id="descripcion" cols="50" rows="3" class="form-control"
                                        name="descripcion"></textarea>
                                </div>
                                <div class="input-box">
                                    <span class="details">Repeticiones</span>
                                    <input type="number" placeholder="No. de repeticiones" id="repeticiones" required
                                        name="repeticiones">
                                </div>
                                <div class="input-box">
                                    <span class="details">Duración</span>
                                    <input type="number" id="duracion" required name="duracion"
                                        placeholder="Duración en segundos">
                                </div>
                                <div class="input-box">
                                    <span class="details">GIF</span>
                                    <div class="custom-file">
                                        <input type="file" accept="image/gif" class="custom-file-input" required
                                            id="exampleInputFile" name="gif">
                                    </div>
                                </div>
                                <div class="input-box">
                                    <span class="details">Clasificación</span>
                                    <select class="form-control" required id="grupo" name="id_clasificacion">
                                        <option disabled selected value>Seleccionar...</option>
                                        <option value="1">Clasificación 1</option>
                                        <option value="2">Clasificación 2</option>
                                        <option value="3">Clasificación 3</option>
                                        <option value="4">Clasificación 4</option>
                                    </select>
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