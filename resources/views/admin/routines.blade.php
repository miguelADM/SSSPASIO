<x-layouts.admin-layout>
    <h1>Rutinas</h1>
    <div class="button-container">
        <button class="button button-primary" type="button" id="open-modal">Agregar rutina <img
                src="{{ asset('assets/icons/admin/exercise-running.svg') }}" alt=""></button>
    </div>

    <div class="modal__container">
        <div action="" class="modal">
            <button id="close-modal" type="button">
                <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
            </button>

            <section class="content">
                <div class="form-container">
                    <div class="title">Registrar rutina</div>
                    <div class="content">
                        <form action="" class="formularioAdmin">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Tipo</span>
                                    <select required id="cat" name="cat">
                                        <option disabled selected value>Seleccionar...</option>
                                        <option value="Cardio">Cardio</option>
                                        <option value="Force">Force</option>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <span class="details">Nombre</span>
                                    <input type="text" id="nombre" required name="nombre"
                                        placeholder="Nombre de la rutina">
                                </div>
                                <div class="input-box">
                                    <span class="details">Audio</span>
                                    <input type="text" required name="audio" placeholder="URL de Soundcloud">
                                </div>
                                <div class="input-box">
                                    <span class="details">Instrucciones</span>
                                    <textarea class="ckeditor" name="descripcion" id="editor1" rows="10" cols="80"
                                        required="" placeholder="Instrucciónes a seguir"></textarea>
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