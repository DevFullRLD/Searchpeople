<form id="FrmCadCaracteristicas" name="cadCaracteristicas" action="" method="">
    
        <!-- Caracteristicas -->
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label></label>
                <select class="form-control " name="cbx_desaparecido" id="cbx_desaparecido">
                    <option value="0">Selecione a pessoa</option>
                    <?php while ($row = $Desaparecido->fetch_assoc()) { ?>
                        <option value="<?php echo utf8_encode($row['id_Desaparecido']); ?>"><?php echo utf8_encode($row['nome_desaparecido']); ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    <!-- Observações -->
    <div class="form-row">
        <div class="form-group col-sm-12">
        <label for="comment">Observações</label>
    <textarea class="form-control" placeholder="Caso você tenha Cicatriz, Manchas Ou Tatuagem especifique igual exemplo abaixo:
Tipo: Mancha
Onde: Perna Esquerda
Ou se preferir pode colocar Algumas observações que ache Plausivel para ajudar na Busca pelo desaparecido." rows="5" id="comment"></textarea>
        </div>
    </div>
    <!-- Botões de inpt  -->
    <div class="form-row">
        <div class="upload-btnA-wrapper form-group col-sm-2">
        <button type="file" style="border-radius: 15px;  padding: 5.5px 60px;" class="btn btn-primary" >Anexar Fotos</button>
            <input type="file" name="AnexoFoto" /> 
        </div>
        <div class="form-group col-sm-8">
            <button type="submit" style=" border-radius: 15px; padding: 5.5px 40px;" class="btn btn-primary" >Cadastrar Caracteristica</button>
        </div>
    </div>
</form>