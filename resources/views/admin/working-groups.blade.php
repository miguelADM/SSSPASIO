<x-layouts.admin-layout>
    <h1>Grupos de trabajo</h1>
    <div class="button-container">
        <button class="button button-primary" type="button" id="open-modal">Agregar grupo de trabajo <img
                src="{{ asset('assets/icons/admin/add-group.svg') }}" alt=""></button>
    </div>

    <div class="modal__container">
        <div action="" class="modal">
            <button id="close-modal" type="button">
                <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
            </button>

            <section class="content">
                <div class="form-container">
                    <div class="title">Registrar grupo de trabajo</div>
                    <div class="content">
                        <form action="" class="formularioAdmin dos-col">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Nombre</span>
                                    <input type="text" id="nombre" name="nombre"
                                        placeholder="Nombre del grupo de trabajo">
                                </div>
                                <div class="input-box">
                                    <span class="details">Estatus</span>
                                    <select id="estatus" required name="estatus">
                                        <option disabled selected value>Seleccionar...</option>
                                        <option value="ACTIVO">Activo</option>
                                        <option value="DESACTIVADO">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-box observaciones">
                                <span class="details">Observaciones</span>
                                <textarea id="" cols="50" rows="5" class="form-control" name="observaciones"
                                    placeholder="Observaciones acerca del grupo de trabajo"></textarea>
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