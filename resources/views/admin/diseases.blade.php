<x-layouts.admin-layout>
    <h1>Enfermedades</h1>
    <div class="button-container">
        <button class="button button-primary" type="button" id="open-modal">Agregar Enfermedad <img
                src="{{ asset('assets/icons/admin/heart.svg') }}" alt=""></button>
    </div>

    <div class="modal__container">
        <div action="" class="modal">
            <button id="close-modal" type="button">
                <img src="{{ asset('assets/icons/admin/close-filled.svg') }}" alt="icono de cerrar" loading="lazy">
            </button>

            <section class="content">
                <div class="form-container">
                    <div class="title">Registrar enfermedad/condicion</div>
                    <div class="content">
                        <form action="" class="formularioAdmin dos-col">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Nombre</span>
                                    <input type="text" required id="nombre" name="nombre"
                                        placeholder="Nombre de la enfermedad o condición">
                                </div>
                                <div class="input-box">
                                    <span class="details">Estatus</span>
                                    <select id="estatus" required name="estatus" placeholder="Estatus">
                                        <option disabled selected value>Seleccionar...</option>
                                        <option value="ACTIVO">Activo</option>
                                        <option value="DESACTIVADO">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-box observaciones">
                                <span class="details">Observaciones</span>
                                <textarea id="" cols="50" rows="5" class="form-control" name="observaciones"
                                    placeholder="Observaciones acerca de la enfermedad/condición"></textarea>
                            </div>
                            <div class="btn-form-admin">
                                <input type="submit" value="Registrar">
                            </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</x-layouts.admin-layout>