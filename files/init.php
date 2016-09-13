<?php 
    require_once("files/conect.php");
?>
<script src="js/jquery.mask.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('[name=fone_res]').mask('(00) 0000-0000');
        $('[name=fone_com]').mask('(00) 0000-0000');
        $('[name=fone_cel]').mask('(00) 0000-0000');
    });
    </script>
<script type="text/javascript">
  $(function () {
      $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<script>
  $(function(){
    var MAX_SELECT = 2; // Máximo de 'input' selecionados
    $('input.limited').on('change', function(){
      if($(this).siblings(':checked').length >= MAX_SELECT ){
         this.checked = false;
      }
    });
  });
</script> 
<script>
function ConfirmDelete(){
  return confirm("Tem certeza que deseja deletar?");
}
</script>
<div class="table-responsive">
<h1 class="page-header">Últimos alunos cadastrados</h1>
<table class="table table-striped" style="font-family: Tahoma;">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Bairro</th>
                  <th>Areas</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>
                 <?php 
                    $res = mysql_query("select *from alunos JOIN telefones WHERE aluno_cod = alunos_aluno_cod order by aluno_cod DESC ")or die(mysql_error());  
                    while($mostrar = mysql_fetch_assoc($res)):
                      $id = $mostrar['aluno_cod'];
                    
                  ?> 
                <tr>
                  <td><?php echo $mostrar['aluno_nome']; ?></td>
                  <td><?php echo $mostrar['aluno_idade']." anos" ?></td>
                  <td><?php echo $mostrar['aluno_bairro']; ?></td>
                  <td><?php echo $mostrar['aluno_areas']; ?></td>
                  <td><a class="glyphicon glyphicon-remove-sign" href="files/del.php?id=<?php echo $id ?>" Onclick="return ConfirmDelete();"></a>
                      <a class="glyphicon glyphicon-edit" data-toggle="modal" data-target=".bs-example-modal-lg-edit<?php echo $id;?>" href="#" ></a>
                      <a class="glyphicon glyphicon-info-sign" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $id;?>" href="#" ></a>
    
                  </td>
                </tr>
                <!-- modal editar -->
                <div class="modal fade bs-example-modal-lg-edit<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="padding:10px;font-size:20px;">
                      <h1>Informações completas!</h1>
                      <form action="files/edit.php?id=<?php echo $id;?>" method="post" >
                        <input type="text" class="form-control" name="nome" value="<?php echo $mostrar['aluno_nome'];?>"placeholder="Informe seu nome" required/><br>
                        <input type="date" class="form-control" name="datanasc" value="<?php echo $mostrar['aluno_dtnasc'];?>" placeholder="Informe seu nome" required/><br>
                          <select name="idade" value="" class="form-control">
                            <option value="0"  <?php if($mostrar['aluno_idade'] == '0' )echo 'selected';?>>Selecione sua idade</option>
                            <option value="14" <?php if($mostrar['aluno_idade'] == '14')echo 'selected';?> >14 anos</option>
                            <option value="15" <?php if($mostrar['aluno_idade'] == '15')echo 'selected';?> >15 anos</option>
                            <option value="16" <?php if($mostrar['aluno_idade'] == '16')echo 'selected';?> >16 anos</option>
                            <option value="17" <?php if($mostrar['aluno_idade'] == '17')echo 'selected';?> >17 anos</option>
                            <option value="18" <?php if($mostrar['aluno_idade'] == '18')echo 'selected';?> >18 anos</option>
                            <option value="19" <?php if($mostrar['aluno_idade'] == '19')echo 'selected';?> >19 anos</option>
                            <option value="20" <?php if($mostrar['aluno_idade'] == '20')echo 'selected';?> >20 anos</option>
                            <option value="21" <?php if($mostrar['aluno_idade'] == '21')echo 'selected';?> >21 anos</option>
                            <option value="22" <?php if($mostrar['aluno_idade'] == '22')echo 'selected';?> >22 anos</option>
                            <option value="23" <?php if($mostrar['aluno_idade'] == '23')echo 'selected';?> >23 anos</option>
                            <option value="24" <?php if($mostrar['aluno_idade'] == '24')echo 'selected';?> >24 anos</option>
                          </select><br>
                        <select name="cidade" style="width:100%;height:35px;border-radius:5px;margin-bottom:20px;"> 
                          <option value="0" <?php if($mostrar['aluno_cidade']=='0')echo 'selected'; ?> >Selecione a cidade onde mora</option>
                          <option value="Abdon Batista" <?php if($mostrar['aluno_cidade']=='Abdon Batista')echo 'selected'; ?> >Abdon Batista</option>
                          <option value="Abelardo Luz" <?php if($mostrar['aluno_cidade']=='AAbelardo Luz')echo 'selected'; ?>>Abelardo Luz</option>
                          <option value="Agrolândia" <?php if($mostrar['aluno_cidade']=='Agrolândia')echo 'selected'; ?>>Agrolândia</option>
                          <option value="Agronômica" <?php if($mostrar['aluno_cidade']=='Agronômica')echo 'selected'; ?>>Agronômica</option>
                          <option value="Água Doce" <?php if($mostrar['aluno_cidade']=='Água Doce')echo 'selected'; ?>>Água Doce</option>
                          <option value="Águas de Chapecó" <?php if($mostrar['aluno_cidade']=='Águas de Chapecó')echo 'selected'; ?>>Águas de Chapecó</option>
                          <option value="Águas Frias" <?php if($mostrar['aluno_cidade']=='Águas Frias')echo 'selected'; ?>>Águas Frias</option>
                          <option value="Águas Mornas" <?php if($mostrar['aluno_cidade']=='Águas Mornas')echo 'selected'; ?>>Águas Mornas</option>
                          <option value="Alfredo Wagner" <?php if($mostrar['aluno_cidade']=='Alfredo Wagner')echo 'selected'; ?>>Alfredo Wagner</option>
                          <option value="Alto Bela Vista" <?php if($mostrar['aluno_cidade']=='Alto Bela Vista')echo 'selected'; ?>>Alto Bela Vista</option>
                          <option value="Anchieta" <?php if($mostrar['aluno_cidade']=='Anchieta')echo 'selected'; ?>>Anchieta</option>
                          <option value="Angelina"<?php if($mostrar['aluno_cidade']=='Angelina')echo 'selected'; ?>>Angelina</option>
                          <option value="Anita Garibaldi" <?php if($mostrar['aluno_cidade']=='Anita Garibaldi')echo 'selected'; ?>>Anita Garibaldi</option>
                          <option value="Anitápolis" <?php if($mostrar['aluno_cidade']=='Anitápolis')echo 'selected'; ?>>Anitápolis</option>
                          <option value="Antônio Carlos" <?php if($mostrar['aluno_cidade']=='Antônio Carlos')echo 'selected'; ?>>Antônio Carlos</option>
                          <option value="Apiúna"<?php if($mostrar['aluno_cidade']=='Apiúna')echo 'selected'; ?>>Apiúna</option>
                          <option value="Arabutã"<?php if($mostrar['aluno_cidade']=='Arabutã')echo 'selected'; ?>>Arabutã</option>
                          <option value="Araquari"<?php if($mostrar['aluno_cidade']=='Araquari')echo 'selected'; ?>>Araquari</option>
                          <option value="Araranguá"<?php if($mostrar['aluno_cidade']=='Araranguá')echo 'selected'; ?>>Araranguá</option>
                          <option value="Armazém"<?php if($mostrar['aluno_cidade']=='Abdon Batista')echo 'selected'; ?>>Armazém</option>
                          <option value="Arroio Trinta"<?php if($mostrar['aluno_cidade']=='Armazém')echo 'selected'; ?>>Arroio Trinta</option>
                          <option value="Arvoredo"<?php if($mostrar['aluno_cidade']=='Arvoredo')echo 'selected'; ?>>Arvoredo</option>
                          <option value="Ascurra"<?php if($mostrar['aluno_cidade']=='Ascurra')echo 'selected'; ?>>Ascurra</option>
                          <option value="Atalanta"<?php if($mostrar['aluno_cidade']=='Atalanta')echo 'selected'; ?>>Atalanta</option>
                          <option value="Aurora"<?php if($mostrar['aluno_cidade']=='Aurora')echo 'selected'; ?>>Aurora</option>
                          <option value="Balneário Arroio do Silva"<?php if($mostrar['aluno_cidade']=='Balneário Arroio do Silva')echo 'selected'; ?>>Balneário Arroio do Silva</option>
                          <option value="Balneário Barra do Sul"<?php if($mostrar['aluno_cidade']=='Abdon Batista')echo 'selected'; ?>>Balneário Barra do Sul</option>
                          <option value="Balneário Camboriú"<?php if($mostrar['aluno_cidade']=='Balneário Barra do Sul')echo 'selected'; ?>>Balneário Camboriú</option>
                          <option value="Balneário Gaivota"<?php if($mostrar['aluno_cidade']=='Balneário Gaivota')echo 'selected'; ?>>Balneário Gaivota</option>
                          <option value="420208Bandeirante1"<?php if($mostrar['aluno_cidade']=='Bandeirante')echo 'selected'; ?>>Bandeirante</option>
                          <option value="Barra Bonita"<?php if($mostrar['aluno_cidade']=='Barra Bonita')echo 'selected'; ?>>Barra Bonita</option>
                          <option value="Barra Velha"<?php if($mostrar['aluno_cidade']=='Barra Velha')echo 'selected'; ?>>Barra Velha</option>
                          <option value="Bela Vista do Toldo"<?php if($mostrar['aluno_cidade']=='Bela Vista do Toldo')echo 'selected'; ?>>Bela Vista do Toldo</option>
                          <option value="Belmonte"<?php if($mostrar['aluno_cidade']=='Belmonte')echo 'selected'; ?>>Belmonte</option>
                          <option value="Benedito"<?php if($mostrar['aluno_cidade']=='Benedito')echo 'selected'; ?>>Benedito Novo</option>
                          <option value="Biguaçu"<?php if($mostrar['aluno_cidade']=='Biguaçu')echo 'selected'; ?>>Biguaçu</option>
                          <option value="Blumenau"<?php if($mostrar['aluno_cidade']=='Blumenau')echo 'selected'; ?>>Blumenau</option>
                          <option value="Bocaina do Sul"<?php if($mostrar['aluno_cidade']=='Bocaina do Sul')echo 'selected'; ?>>Bocaina do Sul</option>
                          <option value="Bombinhas"<?php if($mostrar['aluno_cidade']=='Bombinhas')echo 'selected'; ?>>Bombinhas</option>
                          <option value="Bom Jardim da Serra"<?php if($mostrar['aluno_cidade']=='Bom Jardim da Serra')echo 'selected'; ?>>Bom Jardim da Serra</option>
                          <option value="Bom Jesus"<?php if($mostrar['aluno_cidade']=='Bom Jesus')echo 'selected'; ?>>Bom Jesus</option>
                          <option value="Bom Jesus do Oeste"<?php if($mostrar['aluno_cidade']=='Bom Jesus do Oeste')echo 'selected'; ?>>Bom Jesus do Oeste</option>
                          <option value="Bom Retiro"<?php if($mostrar['aluno_cidade']=='Bom Retiro')echo 'selected'; ?>>Bom Retiro</option>
                          <option value="Botuverá"<?php if($mostrar['aluno_cidade']=='Botuverá')echo 'selected'; ?>>Botuverá</option>
                          <option value="Braço do Norte"<?php if($mostrar['aluno_cidade']=='Braço do Norte')echo 'selected'; ?>>Braço do Norte</option>
                          <option value="Braço do Trombudo"<?php if($mostrar['aluno_cidade']=='Braço do Trombudo')echo 'selected'; ?>>Braço do Trombudo</option>
                          <option value="Brunópolis"<?php if($mostrar['aluno_cidade']=='Brunópolis')echo 'selected'; ?>>Brunópolis</option>
                          <option value="Brusque"<?php if($mostrar['aluno_cidade']=='Brusque')echo 'selected'; ?>>Brusque</option>
                          <option value="Caçador"<?php if($mostrar['aluno_cidade']=='Caçador')echo 'selected'; ?>>Caçador</option>
                          <option value="Caibi"<?php if($mostrar['aluno_cidade']=='Caibi')echo 'selected'; ?>>Caibi</option>
                          <option value="Calmon"<?php if($mostrar['aluno_cidade']=='Calmon')echo 'selected'; ?>>Calmon</option>
                          <option value="Camboriú"<?php if($mostrar['aluno_cidade']=='Camboriú')echo 'selected'; ?>>Camboriú</option>
                          <option value="Campo Alegre"<?php if($mostrar['aluno_cidade']=='Campo Alegre')echo 'selected'; ?>>Campo Alegre</option>
                          <option value="Campo Belo do Sul"<?php if($mostrar['aluno_cidade']=='Campo Belo do Sul')echo 'selected'; ?>>Campo Belo do Sul</option>
                          <option value="Campo Erê"<?php if($mostrar['aluno_cidade']=='Campo Erê')echo 'selected'; ?>>Campo Erê</option>
                          <option value="Campos Novos"<?php if($mostrar['aluno_cidade']=='Campos Novos')echo 'selected'; ?>>Campos Novos</option>
                          <option value="Canelinha"<?php if($mostrar['aluno_cidade']=='Canelinha')echo 'selected'; ?>>Canelinha</option>
                          <option value="Canoinhas"<?php if($mostrar['aluno_cidade']=='Canoinhas')echo 'selected'; ?>>Canoinhas</option>
                          <option value="Capão Alto"<?php if($mostrar['aluno_cidade']=='Capão Alto')echo 'selected'; ?>>Capão Alto</option>
                          <option value="Capinzal"<?php if($mostrar['aluno_cidade']=='Capinzal')echo 'selected'; ?>>Capinzal</option>
                          <option value="Capivari de Baixo"<?php if($mostrar['aluno_cidade']=='Capivari de Baixo')echo 'selected'; ?>>Capivari de Baixo</option>
                          <option value="Catanduvas"<?php if($mostrar['aluno_cidade']=='Catanduvas')echo 'selected'; ?>>Catanduvas</option>
                          <option value="Caxambu do Sul"<?php if($mostrar['aluno_cidade']=='Caxambu do Sul')echo 'selected'; ?>>Caxambu do Sul</option>
                          <option value="Celso Ramos"<?php if($mostrar['aluno_cidade']=='Celso Ramos')echo 'selected'; ?>>Celso Ramos</option>
                          <option value="Cerro Negro"<?php if($mostrar['aluno_cidade']=='Cerro Negro')echo 'selected'; ?>>Cerro Negro</option>
                          <option value="Chapadão do Lageado"<?php if($mostrar['aluno_cidade']=='Chapadão do Lageado')echo 'selected'; ?>>Chapadão do Lageado</option>
                          <option value="Chapecó"<?php if($mostrar['aluno_cidade']=='Chapecó')echo 'selected'; ?>>Chapecó</option>
                          <option value="Cocal do Sul"<?php if($mostrar['aluno_cidade']=='Cocal do Sul')echo 'selected'; ?>>Cocal do Sul</option>
                          <option value="Concórdia"<?php if($mostrar['aluno_cidade']=='Concórdia')echo 'selected'; ?>>Concórdia</option>
                          <option value="Cordilheira Alta"<?php if($mostrar['aluno_cidade']=='Cordilheira Alta')echo 'selected'; ?>>Cordilheira Alta</option>
                          <option value="Coronel Freitas"<?php if($mostrar['aluno_cidade']=='Coronel Freitas')echo 'selected'; ?>>Coronel Freitas</option>
                          <option value="Coronel Martins"<?php if($mostrar['aluno_cidade']=='Coronel Martins')echo 'selected'; ?>>Coronel Martins</option>
                          <option value="Correia Pinto"<?php if($mostrar['aluno_cidade']=='Correia Pinto')echo 'selected'; ?>>Correia Pinto</option>
                          <option value="Corupá"<?php if($mostrar['aluno_cidade']=='Corupá')echo 'selected'; ?>>Corupá</option>
                          <option value="Criciúma"<?php if($mostrar['aluno_cidade']=='Criciúma')echo 'selected'; ?>>Criciúma</option>
                          <option value="Cunha Porã"<?php if($mostrar['aluno_cidade']=='Cunha Porã')echo 'selected'; ?>>Cunha Porã</option>
                          <option value="Cunhataí"<?php if($mostrar['aluno_cidade']=='Cunhataí')echo 'selected'; ?>>Cunhataí</option>
                          <option value="Curitibanos"<?php if($mostrar['aluno_cidade']=='Curitibanos')echo 'selected'; ?>>Curitibanos</option>
                          <option value="Descanso"<?php if($mostrar['aluno_cidade']=='Descanso')echo 'selected'; ?>>Descanso</option>
                          <option value="Dionísio Cerqueira"<?php if($mostrar['aluno_cidade']=='Dionísio Cerqueira')echo 'selected'; ?>>Dionísio Cerqueira</option>
                          <option value="Dona Emma"<?php if($mostrar['aluno_cidade']=='Dona Emma')echo 'selected'; ?>>Dona Emma</option>
                          <option value="Doutor Pedrinho"<?php if($mostrar['aluno_cidade']=='Doutor Pedrinho')echo 'selected'; ?>>Doutor Pedrinho</option>
                          <option value="Entre Rios"<?php if($mostrar['aluno_cidade']=='Entre Rios')echo 'selected'; ?>>Entre Rios</option>
                          <option value="Ermo"<?php if($mostrar['aluno_cidade']=='Ermo')echo 'selected'; ?>>Ermo</option>
                          <option value="Erval Velho"<?php if($mostrar['aluno_cidade']=='Erval Velho')echo 'selected'; ?>>Erval Velho</option>
                          <option value="Faxinal dos Guedes"<?php if($mostrar['aluno_cidade']=='Faxinal dos Guedes')echo 'selected'; ?>>Faxinal dos Guedes</option>
                          <option value="Flor do Sertão"<?php if($mostrar['aluno_cidade']=='Flor do Sertão')echo 'selected'; ?>>Flor do Sertão</option>
                          <option value="Florianópolis"<?php if($mostrar['aluno_cidade']=='Florianópolis')echo 'selected'; ?>>Florianópolis</option>
                          <option value="Formosa do Sul"<?php if($mostrar['aluno_cidade']=='Formosa do Sul')echo 'selected'; ?>>Formosa do Sul</option>
                          <option value="Forquilhinha"<?php if($mostrar['aluno_cidade']=='Forquilhinha')echo 'selected'; ?>>Forquilhinha</option>
                          <option value="Fraiburgo"<?php if($mostrar['aluno_cidade']=='Fraiburgo')echo 'selected'; ?>>Fraiburgo</option>
                          <option value="Frei Rogério"<?php if($mostrar['aluno_cidade']=='Frei Rogério')echo 'selected'; ?>>Frei Rogério</option>
                          <option value="Galvão"<?php if($mostrar['aluno_cidade']=='Galvão')echo 'selected'; ?>>Galvão</option>
                          <option value="Garopaba"<?php if($mostrar['aluno_cidade']=='Garopaba')echo 'selected'; ?>>Garopaba</option>
                          <option value="Garuva"<?php if($mostrar['aluno_cidade']=='Garuva')echo 'selected'; ?>>Garuva</option>
                          <option value="Gaspar"<?php if($mostrar['aluno_cidade']=='Gaspar')echo 'selected'; ?>>Gaspar</option>
                          <option value="Governador Celso Ramos"<?php if($mostrar['aluno_cidade']=='Governador Celso Ramos')echo 'selected'; ?>>Governador Celso Ramos</option>
                          <option value="Grão Pará"<?php if($mostrar['aluno_cidade']=='Grão Pará')echo 'selected'; ?>>Grão Pará</option>
                          <option value="Gravatal"<?php if($mostrar['aluno_cidade']=='Gravatal')echo 'selected'; ?>>Gravatal</option>
                          <option value="Guabiruba"<?php if($mostrar['aluno_cidade']=='Guabiruba')echo 'selected'; ?>>Guabiruba</option>
                          <option value="Guaraciaba"<?php if($mostrar['aluno_cidade']=='Guaraciaba')echo 'selected'; ?>>Guaraciaba</option>
                          <option value="Guaramirim"<?php if($mostrar['aluno_cidade']=='Guaramirim')echo 'selected'; ?>>Guaramirim</option>
                          <option value="Guarujá do Sul"<?php if($mostrar['aluno_cidade']=='Guarujá do Sul')echo 'selected'; ?>>Guarujá do Sul</option>
                          <option value="Guatambú"<?php if($mostrar['aluno_cidade']=='Guatambú')echo 'selected'; ?>>Guatambú</option>
                          <option value="Herval d`Oeste"<?php if($mostrar['aluno_cidade']=='Herval d`Oeste')echo 'selected'; ?>>Herval d`Oeste</option>
                          <option value="Ibiam"<?php if($mostrar['aluno_cidade']=='Ibiam')echo 'selected'; ?>>Ibiam</option>
                          <option value="Ibicaré"<?php if($mostrar['aluno_cidade']=='Ibicaré')echo 'selected'; ?>>Ibicaré</option>
                          <option value="Ibirama"<?php if($mostrar['aluno_cidade']=='Ibirama')echo 'selected'; ?>>Ibirama</option>
                          <option value="Içara"<?php if($mostrar['aluno_cidade']=='Içara')echo 'selected'; ?>>Içara</option>
                          <option value="Ilhota"<?php if($mostrar['aluno_cidade']=='Ilhota')echo 'selected'; ?>>Ilhota</option>
                          <option value="Imaruí"<?php if($mostrar['aluno_cidade']=='Imaruí')echo 'selected'; ?>>Imaruí</option>
                          <option value="Imbituba"<?php if($mostrar['aluno_cidade']=='Imbituba')echo 'selected'; ?>>Imbituba</option>
                          <option value="Imbuia"<?php if($mostrar['aluno_cidade']=='Imbuia')echo 'selected'; ?>>Imbuia</option>
                          <option value="Indaial"<?php if($mostrar['aluno_cidade']=='Indaial')echo 'selected'; ?>>Indaial</option>
                          <option value="Iomerê"<?php if($mostrar['aluno_cidade']=='Iomerê')echo 'selected'; ?>>Iomerê</option>
                          <option value="Ipira"<?php if($mostrar['aluno_cidade']=='Ipira')echo 'selected'; ?>>Ipira</option>
                          <option value="Iporã do Oeste"<?php if($mostrar['aluno_cidade']=='Iporã do Oeste')echo 'selected'; ?>>Iporã do Oeste</option>
                          <option value="Ipuaçu"<?php if($mostrar['aluno_cidade']=='Ipuaçu')echo 'selected'; ?>>Ipuaçu</option>
                          <option value="Ipumirim"<?php if($mostrar['aluno_cidade']=='Ipumirim<')echo 'selected'; ?>>Ipumirim</option>
                          <option value="Iraceminha"<?php if($mostrar['aluno_cidade']=='Iraceminha')echo 'selected'; ?>>Iraceminha</option>
                          <option value="Irani"<?php if($mostrar['aluno_cidade']=='Irani')echo 'selected'; ?>>Irani</option>
                          <option value="Irati"<?php if($mostrar['aluno_cidade']=='Irati')echo 'selected'; ?>>Irati</option>
                          <option value="Irineópolis"<?php if($mostrar['aluno_cidade']=='Irineópolis')echo 'selected'; ?>>Irineópolis</option>
                          <option value="Itá"<?php if($mostrar['aluno_cidade']=='Itá')echo 'selected'; ?>>Itá</option>
                          <option value="Itaiópolis"<?php if($mostrar['aluno_cidade']=='Itaiópolis')echo 'selected'; ?>>Itaiópolis</option>
                          <option value="Itajaí"<?php if($mostrar['aluno_cidade']=='Itajaí')echo 'selected'; ?>>Itajaí</option>
                          <option value="Itapema"<?php if($mostrar['aluno_cidade']=='Itapema')echo 'selected'; ?>>Itapema</option>
                          <option value="Itapiranga"<?php if($mostrar['aluno_cidade']=='Itapiranga')echo 'selected'; ?>>Itapiranga</option>
                          <option value="Itapoá"<?php if($mostrar['aluno_cidade']=='Itapoá')echo 'selected'; ?>>Itapoá</option>
                          <option value="Ituporanga"<?php if($mostrar['aluno_cidade']=='Ituporanga')echo 'selected'; ?>>Ituporanga</option>
                          <option value="Jaborá"<?php if($mostrar['aluno_cidade']=='Jaborá')echo 'selected'; ?>>Jaborá</option>
                          <option value="Jacinto Machado"<?php if($mostrar['aluno_cidade']=='Jacinto Machado')echo 'selected'; ?>>Jacinto Machado</option>
                          <option value="Jaguaruna"<?php if($mostrar['aluno_cidade']=='Jaguaruna')echo 'selected'; ?>>Jaguaruna</option>
                          <option value="Jaraguá do Sul"<?php if($mostrar['aluno_cidade']=='Jaraguá do Sul')echo 'selected'; ?>>Jaraguá do Sul</option>
                          <option value="Jardinópolis"<?php if($mostrar['aluno_cidade']=='Jardinópolis')echo 'selected'; ?>>Jardinópolis</option>
                          <option value="Joaçaba"<?php if($mostrar['aluno_cidade']=='Joaçaba')echo 'selected'; ?>>Joaçaba</option>
                          <option value="Joinville"<?php if($mostrar['aluno_cidade']=='Joinville')echo 'selected'; ?>>Joinville</option>
                          <option value="José Boiteux"<?php if($mostrar['aluno_cidade']=='José Boiteux')echo 'selected'; ?>>José Boiteux</option>
                          <option value="Jupiá"<?php if($mostrar['aluno_cidade']=='Jupiá')echo 'selected'; ?>>Jupiá</option>
                          <option value="Lacerdópolis"<?php if($mostrar['aluno_cidade']=='Lacerdópolis')echo 'selected'; ?>>Lacerdópolis</option>
                          <option value="Lages"<?php if($mostrar['aluno_cidade']=='Lages')echo 'selected'; ?>>Lages</option>
                          <option value="Laguna"<?php if($mostrar['aluno_cidade']=='Laguna')echo 'selected'; ?>>Laguna</option>
                          <option value="Lajeado Grande"<?php if($mostrar['aluno_cidade']=='Lajeado Grande')echo 'selected'; ?>>Lajeado Grande</option>
                          <option value="Laurentino"<?php if($mostrar['aluno_cidade']=='Laurentino')echo 'selected'; ?>>Laurentino</option>
                          <option value="Lauro Muller"<?php if($mostrar['aluno_cidade']=='Lauro Muller')echo 'selected'; ?>>Lauro Muller</option>
                          <option value="Lebon Régis"<?php if($mostrar['aluno_cidade']=='Lebon Régis')echo 'selected'; ?>>Lebon Régis</option>
                          <option value="Leoberto Leal"<?php if($mostrar['aluno_cidade']=='Leoberto Leal')echo 'selected'; ?>>Leoberto Leal</option>
                          <option value="Lindóia do Sul"<?php if($mostrar['aluno_cidade']=='Lindóia do Sul')echo 'selected'; ?>>Lindóia do Sul</option>
                          <option value="Lontras"<?php if($mostrar['aluno_cidade']=='Lontras')echo 'selected'; ?>>Lontras</option>
                          <option value="Luiz Alves"<?php if($mostrar['aluno_cidade']=='Luiz Alves')echo 'selected'; ?>>Luiz Alves</option>
                          <option value="Luzerna"<?php if($mostrar['aluno_cidade']=='Luzerna')echo 'selected'; ?>>Luzerna</option>
                          <option value="Macieira"<?php if($mostrar['aluno_cidade']=='Macieira')echo 'selected'; ?>>Macieira</option>
                          <option value="Mafra"<?php if($mostrar['aluno_cidade']=='Mafra')echo 'selected'; ?>>Mafra</option>
                          <option value="Major Gercino"<?php if($mostrar['aluno_cidade']=='Major Gercino')echo 'selected'; ?>>Major Gercino</option>
                          <option value="Major Vieira"<?php if($mostrar['aluno_cidade']=='Major Vieira')echo 'selected'; ?>>Major Vieira</option>
                          <option value="Maracajá"<?php if($mostrar['aluno_cidade']=='Maracajá')echo 'selected'; ?>>Maracajá</option>
                          <option value="Maravilha"<?php if($mostrar['aluno_cidade']=='Maravilha')echo 'selected'; ?>>Maravilha</option>
                          <option value="Marema"<?php if($mostrar['aluno_cidade']=='Marema')echo 'selected'; ?>>Marema</option>
                          <option value="Massaranduba"<?php if($mostrar['aluno_cidade']=='Massaranduba')echo 'selected'; ?>>Massaranduba</option>
                          <option value="Matos Costa"<?php if($mostrar['aluno_cidade']=='Matos Costa')echo 'selected'; ?>>Matos Costa</option>
                          <option value="Meleiro"<?php if($mostrar['aluno_cidade']=='Meleiro')echo 'selected'; ?>>Meleiro</option>
                          <option value="Mirim Doce"<?php if($mostrar['aluno_cidade']=='Mirim Doce')echo 'selected'; ?>>Mirim Doce</option>
                          <option value="Modelo"<?php if($mostrar['aluno_cidade']=='Modelo')echo 'selected'; ?>>Modelo</option>
                          <option value="Mondaí"<?php if($mostrar['aluno_cidade']=='Mondaí')echo 'selected'; ?>>Mondaí</option>
                          <option value="Monte Carlo"<?php if($mostrar['aluno_cidade']=='Monte Carlo')echo 'selected'; ?>>Monte Carlo</option>
                          <option value="Monte Castelo"<?php if($mostrar['aluno_cidade']=='Monte Castelo')echo 'selected'; ?>>Monte Castelo</option>
                          <option value="Morro da Fumaça"<?php if($mostrar['aluno_cidade']=='Morro da Fumaça')echo 'selected'; ?>>Morro da Fumaça</option>
                          <option value="Morro Grande"<?php if($mostrar['aluno_cidade']=='Morro Grande')echo 'selected'; ?>>Morro Grande</option>
                          <option value="Navegantes"<?php if($mostrar['aluno_cidade']=='Navegantes')echo 'selected'; ?>>Navegantes</option>
                          <option value="Nova Erechim"<?php if($mostrar['aluno_cidade']=='Nova Erechim')echo 'selected'; ?>>Nova Erechim</option>
                          <option value="Nova Itaberaba"<?php if($mostrar['aluno_cidade']=='Nova Itaberaba')echo 'selected'; ?>>Nova Itaberaba</option>
                          <option value="Nova Trento"<?php if($mostrar['aluno_cidade']=='Nova Trento')echo 'selected'; ?>>Nova Trento</option>
                          <option value="Nova Veneza"<?php if($mostrar['aluno_cidade']=='Nova Veneza')echo 'selected'; ?>>Nova Veneza</option>
                          <option value="Novo Horizonte"<?php if($mostrar['aluno_cidade']=='Novo Horizonte')echo 'selected'; ?>>Novo Horizonte</option>
                          <option value="Orleans"<?php if($mostrar['aluno_cidade']=='Orleans')echo 'selected'; ?>>Orleans</option>
                          <option value="Otacílio Costa"<?php if($mostrar['aluno_cidade']=='Otacílio Costa')echo 'selected'; ?>>Otacílio Costa</option>
                          <option value="Ouro"<?php if($mostrar['aluno_cidade']=='Ouro')echo 'selected'; ?>>Ouro</option>
                          <option value="Ouro Verde"<?php if($mostrar['aluno_cidade']=='Ouro Verde')echo 'selected'; ?>>Ouro Verde</option>
                          <option value="Paial"<?php if($mostrar['aluno_cidade']=='Paial')echo 'selected'; ?>>Paial</option>
                          <option value="Painel"<?php if($mostrar['aluno_cidade']=='Painel')echo 'selected'; ?>>Painel</option>
                          <option value="Palhoça"<?php if($mostrar['aluno_cidade']=='Palhoça')echo 'selected'; ?>>Palhoça</option>
                          <option value="Palma Sola"<?php if($mostrar['aluno_cidade']=='Palma Sola')echo 'selected'; ?>>Palma Sola</option>
                          <option value="Palmeira"<?php if($mostrar['aluno_cidade']=='Palmeira')echo 'selected'; ?>>Palmeira</option>
                          <option value="Palmitos"<?php if($mostrar['aluno_cidade']=='Palmitos')echo 'selected'; ?>>Palmitos</option>
                          <option value="Papanduva"<?php if($mostrar['aluno_cidade']=='Papanduvaa')echo 'selected'; ?>>Papanduva</option>
                          <option value="Paraíso"<?php if($mostrar['aluno_cidade']=='Paraísoa')echo 'selected'; ?>>Paraíso</option>
                          <option value="Passo de Torres"<?php if($mostrar['aluno_cidade']=='Passo de Torres')echo 'selected'; ?>>Passo de Torres</option>
                          <option value="Passos Maia"<?php if($mostrar['aluno_cidade']=='Passos Maia')echo 'selected'; ?>>Passos Maia</option>
                          <option value="Paulo Lopes"<?php if($mostrar['aluno_cidade']=='Paulo Lopes')echo 'selected'; ?>>Paulo Lopes</option>
                          <option value="Pedras Grandes"<?php if($mostrar['aluno_cidade']=='Pedras Grandes')echo 'selected'; ?>>Pedras Grandes</option>
                          <option value="Penha"<?php if($mostrar['aluno_cidade']=='Penha')echo 'selected'; ?>>Penha</option>
                          <option value="Peritiba"<?php if($mostrar['aluno_cidade']=='Peritiba')echo 'selected'; ?>>Peritiba</option>
                          <option value="Petrolândia"<?php if($mostrar['aluno_cidade']=='Petrolândia')echo 'selected'; ?>>Petrolândia</option>
                          <option value="Piçarras"<?php if($mostrar['aluno_cidade']=='Piçarras')echo 'selected'; ?>>Piçarras</option>
                          <option value="Pinhalzinho"<?php if($mostrar['aluno_cidade']=='Pinhalzinho')echo 'selected'; ?>>Pinhalzinho</option>
                          <option value="Pinheiro Preto"<?php if($mostrar['aluno_cidade']=='Pinheiro Preto')echo 'selected'; ?>>Pinheiro Preto</option>
                          <option value="Piratuba"<?php if($mostrar['aluno_cidade']=='Piratuba')echo 'selected'; ?>>Piratuba</option>
                          <option value="Planalto Alegre"<?php if($mostrar['aluno_cidade']=='Planalto Alegre')echo 'selected'; ?>>Planalto Alegre</option>
                          <option value="Pomerode"<?php if($mostrar['aluno_cidade']=='Pomerode')echo 'selected'; ?>>Pomerode</option>
                          <option value="Ponte Alta"<?php if($mostrar['aluno_cidade']=='Ponte Alta')echo 'selected'; ?>>Ponte Alta</option>
                          <option value="Ponte Alta do Norte"<?php if($mostrar['aluno_cidade']=='Ponte Alta do Norte')echo 'selected'; ?>>Ponte Alta do Norte</option>
                          <option value="Ponte Serrada"<?php if($mostrar['aluno_cidade']=='Ponte Serrada')echo 'selected'; ?>>Ponte Serrada</option>
                          <option value="Porto Belo"<?php if($mostrar['aluno_cidade']=='Porto Belo')echo 'selected'; ?>>Porto Belo</option>
                          <option value="Porto União"<?php if($mostrar['aluno_cidade']=='Porto União')echo 'selected'; ?>>Porto União</option>
                          <option value="Pouso Redondo"<?php if($mostrar['aluno_cidade']=='Pouso Redondo')echo 'selected'; ?>>Pouso Redondo</option>
                          <option value="Praia Grande"<?php if($mostrar['aluno_cidade']=='Praia Grande')echo 'selected'; ?>>Praia Grande</option>
                          <option value="Presidente Castelo Branco"<?php if($mostrar['aluno_cidade']=='Presidente Castelo Branco')echo 'selected'; ?>>Presidente Castelo Branco</option>
                          <option value="Presidente Getúlio"<?php if($mostrar['aluno_cidade']=='Presidente Getúlio')echo 'selected'; ?>>Presidente Getúlio</option>
                          <option value="Presidente Nereu"<?php if($mostrar['aluno_cidade']=='Presidente Nereu')echo 'selected'; ?>>Presidente Nereu</option>
                          <option value="Princesa"<?php if($mostrar['aluno_cidade']=='Princesa')echo 'selected'; ?>>Princesa</option>
                          <option value="4214201"<?php if($mostrar['aluno_cidade']=='Quilombo')echo 'selected'; ?>>Quilombo</option>
                          <option value="Quilombo"<?php if($mostrar['aluno_cidade']=='Rancho Queimado')echo 'selected'; ?>>Rancho Queimado</option>
                          <option value="Rio das Antas"<?php if($mostrar['aluno_cidade']=='Rio das Antas')echo 'selected'; ?>>Rio das Antas</option>
                          <option value="Rio do Campo"<?php if($mostrar['aluno_cidade']=='Rio do Campo')echo 'selected'; ?>>Rio do Campo</option>
                          <option value="Rio do Oeste"<?php if($mostrar['aluno_cidade']=='Rio do Oeste')echo 'selected'; ?>>Rio do Oeste</option>
                          <option value="Rio dos Cedros"<?php if($mostrar['aluno_cidade']=='Rio dos Cedros')echo 'selected'; ?>>Rio dos Cedros</option>
                          <option value="Rio do Sul"<?php if($mostrar['aluno_cidade']=='Rio do Sul')echo 'selected'; ?>>Rio do Sul</option>
                          <option value="Rio Fortuna"<?php if($mostrar['aluno_cidade']=='Rio Fortuna')echo 'selected'; ?>>Rio Fortuna</option>
                          <option value="Rio Negrinho"<?php if($mostrar['aluno_cidade']=='Rio Negrinho')echo 'selected'; ?>>Rio Negrinho</option>
                          <option value="Rio Rufino"<?php if($mostrar['aluno_cidade']=='Rio Rufino')echo 'selected'; ?>>Rio Rufino</option>
                          <option value="Riqueza"<?php if($mostrar['aluno_cidade']=='Riqueza')echo 'selected'; ?>>Riqueza</option>
                          <option value="Rodeio"<?php if($mostrar['aluno_cidade']=='Rodeio')echo 'selected'; ?>>Rodeio</option>
                          <option value="Romelândia"<?php if($mostrar['aluno_cidade']=='Romelândia')echo 'selected'; ?>>Romelândia</option>
                          <option value="Salete"<?php if($mostrar['aluno_cidade']=='Salete')echo 'selected'; ?>>Salete</option>
                          <option value="Saltinho"<?php if($mostrar['aluno_cidade']=='Saltinho')echo 'selected'; ?>>Saltinho</option>
                          <option value="Salto Veloso"<?php if($mostrar['aluno_cidade']=='Salto Veloso')echo 'selected'; ?>>Salto Veloso</option>
                          <option value="Sangão"<?php if($mostrar['aluno_cidade']=='Sangão')echo 'selected'; ?>>Sangão</option>
                          <option value="Santa Cecília"<?php if($mostrar['aluno_cidade']=='Santa Cecília')echo 'selected'; ?>>Santa Cecília</option>
                          <option value="Santa Helena"<?php if($mostrar['aluno_cidade']=='Santa Helena')echo 'selected'; ?>>Santa Helena</option>
                          <option value="Santa Rosa de Lima"<?php if($mostrar['aluno_cidade']=='Santa Rosa de Lima')echo 'selected'; ?>>Santa Rosa de Lima</option>
                          <option value="Santa Rosa do Sul"<?php if($mostrar['aluno_cidade']=='Santa Rosa do Sul')echo 'selected'; ?>>Santa Rosa do Sul</option>
                          <option value="Santa Terezinha"<?php if($mostrar['aluno_cidade']=='Santa Terezinha')echo 'selected'; ?>>Santa Terezinha</option>
                          <option value="Santa Terezinha do Progresso"<?php if($mostrar['aluno_cidade']=='Santa Terezinha do Progresso')echo 'selected'; ?>>Santa Terezinha do Progresso</option>
                          <option value="Santiago do Sul"<?php if($mostrar['aluno_cidade']=='Santiago do Sul')echo 'selected'; ?>>Santiago do Sul</option>
                          <option value="Santo Amaro da Imperatriz"<?php if($mostrar['aluno_cidade']=='Santo Amaro da Imperatriz')echo 'selected'; ?>>Santo Amaro da Imperatriz</option>
                          <option value="São Bento do Sul"<?php if($mostrar['aluno_cidade']=='São Bento do Sul')echo 'selected'; ?>>São Bento do Sul</option>
                          <option value="São Bernardino"<?php if($mostrar['aluno_cidade']=='São Bernardino')echo 'selected'; ?>>São Bernardino</option>
                          <option value="São Bonifácio"<?php if($mostrar['aluno_cidade']=='São Bonifácio')echo 'selected'; ?>>São Bonifácio</option>
                          <option value="São Carlos"<?php if($mostrar['aluno_cidade']=='São Carlos')echo 'selected'; ?>>São Carlos</option>
                          <option value="São Cristovão do Sul"<?php if($mostrar['aluno_cidade']=='São Cristovão do Sul')echo 'selected'; ?>>São Cristovão do Sul</option>
                          <option value="São Domingos"<?php if($mostrar['aluno_cidade']=='São Domingos')echo 'selected'; ?>>São Domingos</option>
                          <option value="São Francisco do Sul"<?php if($mostrar['aluno_cidade']=='São Francisco do Sul')echo 'selected'; ?>>São Francisco do Sul</option>
                          <option value="São João Batista"<?php if($mostrar['aluno_cidade']=='São João Batista')echo 'selected'; ?>>São João Batista</option>
                          <option value="São João do Itaperiú"<?php if($mostrar['aluno_cidade']=='São João do Itaperiú')echo 'selected'; ?>>São João do Itaperiú</option>
                          <option value="São João do Oeste"<?php if($mostrar['aluno_cidade']=='São João do Oeste')echo 'selected'; ?>>São João do Oeste</option>
                          <option value="São João do Sul"<?php if($mostrar['aluno_cidade']=='São João do Sul')echo 'selected'; ?>>São João do Sul</option>
                          <option value="São Joaquim"<?php if($mostrar['aluno_cidade']=='São Joaquim')echo 'selected'; ?>>São Joaquim</option>
                          <option value="São José"<?php if($mostrar['aluno_cidade']=='São José')echo 'selected'; ?>>São José</option>
                          <option value="São José do Cedro"<?php if($mostrar['aluno_cidade']=='São José do Cedro')echo 'selected'; ?>>São José do Cedro</option>
                          <option value="São José do Cerrito"<?php if($mostrar['aluno_cidade']=='São José do Cerrito')echo 'selected'; ?>>São José do Cerrito</option>
                          <option value="São Lourenço do Oeste"<?php if($mostrar['aluno_cidade']=='São Lourenço do Oeste')echo 'selected'; ?>>São Lourenço do Oeste</option>
                          <option value="São Ludgero"<?php if($mostrar['aluno_cidade']=='São Ludgero')echo 'selected'; ?>>São Ludgero</option>
                          <option value="São Martinho"<?php if($mostrar['aluno_cidade']=='São Martinho')echo 'selected'; ?>>São Martinho</option>
                          <option value="São Miguel da Boa Vista"<?php if($mostrar['aluno_cidade']=='São Miguel da Boa Vista')echo 'selected'; ?>>São Miguel da Boa Vista</option>
                          <option value="São Miguel do Oeste"<?php if($mostrar['aluno_cidade']=='São Miguel do Oeste')echo 'selected'; ?>>São Miguel do Oeste</option>
                          <option value="São Pedro de Alcântara"<?php if($mostrar['aluno_cidade']=='São Pedro de Alcântara')echo 'selected'; ?>>São Pedro de Alcântara</option>
                          <option value="Saudades"<?php if($mostrar['aluno_cidade']=='Saudades')echo 'selected'; ?>>Saudades</option>
                          <option value="Schroeder"<?php if($mostrar['aluno_cidade']=='Schroeder')echo 'selected'; ?>>Schroeder</option>
                          <option value="Seara"<?php if($mostrar['aluno_cidade']=='Seara')echo 'selected'; ?>>Seara</option>
                          <option value="Serra Alta"<?php if($mostrar['aluno_cidade']=='Serra Alta')echo 'selected'; ?>>Serra Alta</option>
                          <option value="Siderópolis"<?php if($mostrar['aluno_cidade']=='Siderópolis')echo 'selected'; ?>>Siderópolis</option>
                          <option value="Sombrio"<?php if($mostrar['aluno_cidade']=='Sombrio')echo 'selected'; ?>>Sombrio</option>
                          <option value="Sul Brasil"<?php if($mostrar['aluno_cidade']=='Sul Brasil')echo 'selected'; ?>>Sul Brasil</option>
                          <option value="Taió"<?php if($mostrar['aluno_cidade']=='Taió')echo 'selected'; ?>>Taió</option>
                          <option value="Tangará"<?php if($mostrar['aluno_cidade']=='Tangará')echo 'selected'; ?>>Tangará</option>
                          <option value="Tigrinhos"<?php if($mostrar['aluno_cidade']=='Tigrinhos')echo 'selected'; ?>>Tigrinhos</option>
                          <option value="Tijucas"<?php if($mostrar['aluno_cidade']=='Tijucas')echo 'selected'; ?>>Tijucas</option>
                          <option value="Timbé do Sul"<?php if($mostrar['aluno_cidade']=='Timbé do Sul')echo 'selected'; ?>>Timbé do Sul</option>
                          <option value="Timbó"<?php if($mostrar['aluno_cidade']=='Timbó')echo 'selected'; ?>>Timbó</option>
                          <option value="Timbó Grande"<?php if($mostrar['aluno_cidade']=='Timbó Grande')echo 'selected'; ?>>Timbó Grande</option>
                          <option value="Três Barras"<?php if($mostrar['aluno_cidade']=='Três Barras')echo 'selected'; ?>>Três Barras</option>
                          <option value="Treviso"<?php if($mostrar['aluno_cidade']=='Treviso')echo 'selected'; ?>>Treviso</option>
                          <option value="Treze de Maio"<?php if($mostrar['aluno_cidade']=='Treze de Maio')echo 'selected'; ?>>Treze de Maio</option>
                          <option value="Treze Tílias"<?php if($mostrar['aluno_cidade']=='Treze Tílias')echo 'selected'; ?>>Treze Tílias</option>
                          <option value="Trombudo Central"<?php if($mostrar['aluno_cidade']=='Trombudo Central')echo 'selected'; ?>>Trombudo Central</option>
                          <option value="Tubarão"<?php if($mostrar['aluno_cidade']=='Tubarão')echo 'selected'; ?>>Tubarão</option>
                          <option value="Tunápolis"<?php if($mostrar['aluno_cidade']=='Tunápolis')echo 'selected'; ?>>Tunápolis</option>
                          <option value="Turvo"<?php if($mostrar['aluno_cidade']=='Turvo')echo 'selected'; ?>>Turvo</option>
                          <option value="União do Oeste"<?php if($mostrar['aluno_cidade']=='União do Oeste')echo 'selected'; ?>>União do Oeste</option>
                          <option value="Urubici"<?php if($mostrar['aluno_cidade']=='Urubici')echo 'selected'; ?>>Urubici</option>
                          <option value="Urupema"<?php if($mostrar['aluno_cidade']=='Urupema')echo 'selected'; ?>>Urupema</option>
                          <option value="Urussanga"<?php if($mostrar['aluno_cidade']=='Urussanga')echo 'selected'; ?>>Urussanga</option>
                          <option value="Vargeão"<?php if($mostrar['aluno_cidade']=='Vargeão')echo 'selected'; ?>>Vargeão</option>
                          <option value="Vargem"<?php if($mostrar['aluno_cidade']=='Vargem')echo 'selected'; ?>>Vargem</option>
                          <option value="Vargem Bonita"<?php if($mostrar['aluno_cidade']=='Vargem Bonita')echo 'selected'; ?>>Vargem Bonita</option>
                          <option value="Vidal Ramos"<?php if($mostrar['aluno_cidade']=='Vidal Ramos')echo 'selected'; ?>>Vidal Ramos</option>
                          <option value="Videira"<?php if($mostrar['aluno_cidade']=='Videira')echo 'selected'; ?>>Videira</option>
                          <option value="Vitor Meireles"<?php if($mostrar['aluno_cidade']=='Vitor Meireles')echo 'selected'; ?>>Vitor Meireles</option>
                          <option value="Witmarsum"<?php if($mostrar['aluno_cidade']=='Witmarsuma')echo 'selected'; ?>>Witmarsum</option>
                          <option value="Xanxerê"<?php if($mostrar['aluno_cidade']=='Xanxerê')echo 'selected'; ?>>Xanxerê</option>
                          <option value="Xavantina"<?php if($mostrar['aluno_cidade']=='Xavantina')echo 'selected'; ?>>Xavantina</option>
                          <option value="Xaxim"<?php if($mostrar['aluno_cidade']=='Xaxim')echo 'selected'; ?>>Xaxim</option>
                          <option value="Zortéa"<?php if($mostrar['aluno_cidade']=='Zortéa')echo 'selected'; ?>>Zortéa</option>
                        </select>
                        <input type="text" class="form-control" name="bairro" value="<?php echo $mostrar['aluno_bairro'];?>" placeholder="Informe seu bairro" required/><br>
                        <input type="text" class="form-control" name="rua" value="<?php echo $mostrar['aluno_rua'];?>" placeholder="Informe sua rua" required/><br>
                        <input type="text" class="form-control" name="fone_res" value="<?php echo $mostrar['telefone_res'];?>" placeholder="Informe um Telefone" required/><br>
                        <input type="text" class="form-control" name="fone_com" value="<?php echo $mostrar['telefone_com'];?>" placeholder="Informe um Telefone" required/><br>
                        <input type="text" class="form-control" name="fone_cel" value="<?php echo $mostrar['telefone_cel'];?>" placeholder="Informe um Telefone" required/><br>
                        <select name="serie" class="form-control">
                          <?php $data = explode(',',$mostrar['aluno_area']); ?>
                          <option value="0" <?php if($mostrar['aluno_grau'] == '0')echo 'selected';?> >Selecione sua escolaridade</option>
                          <option value="7" <?php if($mostrar['aluno_grau'] == '7')echo 'selected';?> >7ª série</option>
                          <option value="8" <?php if($mostrar['aluno_grau'] == '8')echo 'selected';?> >8ª série</option>
                          <option value="9" <?php if($mostrar['aluno_grau'] == '9')echo 'selected';?> >9ª série</option>
                          <option value="1" <?php if($mostrar['aluno_grau'] == '1')echo 'selected';?> >1º Ano segundo grau</option>
                          <option value="2" <?php if($mostrar['aluno_grau'] == '2')echo 'selected';?> >2º Ano segundo grau</option>
                          <option value="3" <?php if($mostrar['aluno_grau'] == '3')echo 'selected';?> >3º Ano segundo grau</option>
                          <option value="emc" <?php if($mostrar['aluno_grau'] == 'emc')echo 'selected';?> >Ensino médio completo</option>
                          <option value="eja" <?php if($mostrar['aluno_grau'] == 'eja')echo 'selected';?> >(EJA) Educação de jovens e adultos</option>
                        </select><br>
                        <label><h1><b>Escolha até duas áreas que gostaria de fazer curso de aprendizagem.</b></h1></label><br>
                          
                          <!-- 
                                RETIRAR AS VIRGULAS DO ARRAY AREAS 
                          -->  
                          <?php $data = explode(',',$mostrar['aluno_areas']); ?>

                          <input type="checkbox" <?=(in_array('METALMECANICA',$data))?('checked'):('');?> name="area[]" value="metalmecanica" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de Metalmecânica (Curso de Mecânica, Eletromecânica ou Desenho Mecânico)</a><br>
                          <input type="checkbox" <?=(in_array('ELETROTECNICA',$data))?('checked'):('');?> name="area[]" value="eletrotecnica" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de Eletroeletrônica (Curso de Elétrica)</a><br>
                          <input type="checkbox" <?=(in_array('TECNOLOGIA',$data))?('checked'):('');?> name="area[]" value="tecnologia" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de Tecnologia da Informação (Curso de suporte e manutenção de computadores ou de Informática)</a><br>
                          <input type="checkbox" <?=(in_array('ALIMENTOS',$data))?('checked'):('');?> name="area[]" value="alimentos" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de Alimentos (Curso de Alimentos)</a><br>
                          <input type="checkbox" <?=(in_array('GESTAO',$data))?('checked'):('');?> name="area[]" value="gestao" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de Gestão (Curso de Assistente administrativo)</a><br>
                          <input type="checkbox" <?=(in_array('PCP',$data))?('checked'):('');?> name="area[]" value="pcp" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de PCP (Curso de planejamento e controle de produção)</a><br>
                        <label><h1><b>Possui disponibilidade para contratação no contraturno?</b></h1></label><br>
                          <input type="radio" name="interesse" value="SIM" <?php if($mostrar['aluno_interesse']=='SIM')echo 'checked'; ?> > SIM<br>
                          <input type="radio" name="interesse" value="NÃO" <?php if($mostrar['aluno_interesse']=='NAO')echo 'checked'; ?> > NÃO<br>
                        <label><h1><b>Já realizou algum curso de Aprendizagem no SENAI?</b></h1></label><br>
                          <input type="radio" name="cursou" value="SIM" <?php if($mostrar['aluno_cursou']=='SIM')echo 'checked'; ?> > SIM<br>
                          <input type="radio" name="cursou" value="NAO" <?php if($mostrar['aluno_cursou']=='NAO')echo 'checked'; ?> > NÃO<br>
                        <label><h1><b>Já trabalhou com carteira assinada?</b></h1></label><br>
                          <input type="radio" name="trabalhou" value="SIM" <?php if($mostrar['aluno_trabalhou']=='SIM')echo 'checked'; ?> > SIM<br>
                          <input type="radio" name="trabalhou" value="NAO" <?php if($mostrar['aluno_trabalhou']=='NAO')echo 'checked'; ?> > NÃO<br>
                        <input type="submit" class="btn btn-primary"name="enviar" value="Cadastrar"/><br>

                      </form>
                    </div>
                  </div>
                </div><!-- ACABA MODAL EDITAR -->

                  <!-- MODA LISTAR -->
                  <div class="modal fade bs-example-modal-lg<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="padding:10px;font-size:20px;">
                      <h1>Informações completas!</h1>
                      <img style="border-radius:100px;" src="images/avat.png" width="150" height="150"/>
                      <label>NOME: &nbsp;</label><?php echo  $mostrar['aluno_nome']; ?><hr>
                      <h1>Dados Pessoais</h1> 
                      <label>IDADE: </label><?php echo $mostrar['aluno_idade']." ANOS" ?><br>
                      <label>DATA NASCIMENTO: </label><?php echo $mostrar['aluno_dtnasc'];?><br>
                      <label>CIDADE: </label><?php echo $mostrar['aluno_cidade']; ?><br>
                      <label>RUA: </label><?php echo $mostrar['aluno_rua']; ?><br>
                      <label>BAIRRO: </label><?php echo $mostrar['aluno_bairro']; ?><br>
                      <label>TELEFONE RESIDENCIAL: </label><?php echo $mostrar['telefone_res']; ?><br>
                      <label>TELEFONE CONTATO: </label><?php echo $mostrar['telefone_com']; ?><br>
                      <label>TELEFONE CELULAR: </label><?php echo $mostrar['telefone_cel']; ?><br>
                      <hr>
                      <h1>Escolaridade</h1>
                      <label>ESCOLARIDADE: </label><?php $ser = $mostrar['aluno_grau'];
                                                          if($ser<=7)echo $ser."º ANO";
                                                          else if($ser>7) echo $ser."ª SÉRIE";
                                                          else echo " ";
                                                   ?>
                      <hr>
                      <h1>Areas de Interesse</h1>
                      <label>AREAS: </label><?php echo $mostrar['aluno_areas']; ?><br>
                      <label>INTERESSE EM TRABALHAR?: </label><?php echo $mostrar['aluno_interesse']; 
                                                  
                                                ?><hr>
                      <h1>Outras Informações
                      </h1>
                      <label>JÁ CURSOU SENAI?: </label><?php echo $mostrar['aluno_cursou']; ?><br>
                      <label>JÁ TRABALHOU?: </label><?php echo $mostrar['aluno_trabalhou']; ?><br>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div><!-- ACABA MODAL LISTAR-->
                <?php endwhile; ?>       
              </tbody>
            </table>
</div>



