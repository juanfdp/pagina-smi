<?php
include 'conect.php';

/**
 * CLASE COTIZADOR
 *
 * Clase encargada de toda la logica del proceso de compra y asociacion con crecer.
 * @author CRECER SOLUCIONES
 * @version 1.0
 * @pack
 */
class compra
{
	public $conexion;
	public $fun;
	/**
	 * CONSTRUCTOR DE LA CLASE PARAMETROS
	 */
	function __construct()
	{
		$this->conexion=new Conect();
		$this->fun=new functions();
	}
	/**
	 * METODO QUE HABILITA LOS CAMPOS PARA INGRESAR LOS PASAJEROS SEGUN LA CANTIDAD DE PASAJEROS COTIZADOS
	 */
	public function HabilitarPasajeros($CantidadPasajeros)
	{
		try
		{


			switch ($CantidadPasajeros ) {
				case 1:
					//PASAJERO 1
					echo "<div id=\"travelDetails\">
                            <div class=\"list\">
                                <label class=\"detail\">Pasajero #</label>
                                <div class=\"detailNum\">1</div>
                            </div>      
                                                         
                            <div class=\"list\">
                                <label class=\"detail\">Nombre:</label><br />
                                <input type=\"text\" name=\"n1\" id=\"n1\" size=\"14\"  maxlength=\"25\" />	 
                            </div>                             
                            <div class=\"list\">
                                <label class=\"detail\">Apellido:</label><br />
                                <input type=\"text\" name=\"a1\" id=\"a1\" size=\"14\" maxlength=\"25\" />	 
                            </div>
                            <div class=\"list\">
                                <label class=\"detail\">Documento:</label><br />
                                <input ty+pe=\"text\" name=\"d1\" id=\"d1\" size=\"8\" maxlength=\"15\" />	 
                            </div>                               
                            <div class=\"list\">
                                <label class=\"detail\">Email:</label><br />
                                <input type=\"text\" name=\"em1\" id=\"em1\" size=\"18\" maxlength=\"50\" />	 
                            </div>                            
                            <div class=\"list\">
                                         <label class=\"detail\">Fecha de Nacimiento:</label><br />
                                         
                                         <div class=\"date\">
                                                <select name=\"fndia1\" id=\"f_dateDD1\">
                                                    <optgroup label=\"Dia\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";                                                    
					for($i=1;$i<=31;$i++)echo "<option value=".$i.">".$i."</option>";                                  echo"
                                                    </optgroup>
                                                </select>
                                         </div>                                           
                                         <div class=\"date\">       
                                                <select name=\"fnmes1\" id=\"f_dateMM1\">
                                                    <optgroup label=\"Mes\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1;$i<=12;$i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                          
                                         <div class=\"date\">       
                                                <select name=\"fnanio1\" id=\"f_dateYY1\">
                                                    <optgroup label=\"A�o\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1900;$i<= date ("Y"); $i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                                           
                            </div>                                                                                                   
                       </div> ";
					break;
				case 2:
					//PASAJERO 1
					echo "<div id=\"travelDetails\">
                            <div class=\"list\">
                                <label class=\"detail\">Pasajero #</label>
                                <div class=\"detailNum\">1</div>
                            </div>                                                               
                                                         
                            <div class=\"list\">
                                <label class=\"detail\">Nombre:</label><br />
                                <input type=\"text\" name=\"n1\" id=\"n1\" size=\"14\"  maxlength=\"25\" />	 
                            </div>                             
                            <div class=\"list\">
                                <label class=\"detail\">Apellido:</label><br />
                                <input type=\"text\" name=\"a1\" id=\"a1\" size=\"14\" maxlength=\"25\" />	 
                            </div>
                            <div class=\"list\">
                                <label class=\"detail\">Documento:</label><br />
                                <input type=\"text\" name=\"d1\" id=\"d1\" size=\"8\" maxlength=\"15\" />	 
                            </div>                               
                            <div class=\"list\">
                                <label class=\"detail\">Email:</label><br />
                                <input type=\"text\" name=\"em1\" id=\"em1\" size=\"18\" maxlength=\"50\" />	 
                            </div>                              
                            <div class=\"list\">
                                         <label class=\"detail\">Fecha de Nacimiento:</label><br />
                                         
                                         <div class=\"date\">
                                                <select name=\"fndia1\" id=\"f_dateDD1\">
                                                    <optgroup label=\"Dia\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";                                                    
					for($i=1;$i<=31;$i++)echo "<option value=".$i.">".$i."</option>";                                  echo"
                                                    </optgroup>
                                                </select>
                                         </div>                                           
                                         <div class=\"date\">       
                                                <select name=\"fnmes1\" id=\"f_dateMM1\">
                                                    <optgroup label=\"Mes\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1;$i<=12;$i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                          
                                         <div class=\"date\">       
                                                <select name=\"fnanio1\" id=\"f_dateYY1\">
                                                    <optgroup label=\"A�o\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1900;$i<= date ("Y"); $i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                                           
                            </div>                                                                                                   
                       </div> ";
					//PASAJERO 2
					echo "<div id=\"travelDetails\">
                            <div class=\"list\">
                                <label class=\"detail\">Pasajero #</label>
                                <div class=\"detailNum\">2</div>
                            </div>      
                                                        
                            <div class=\"list\">
                                <label class=\"detail\">Nombre:</label><br />
                                <input type=\"text\" name=\"n2\" id=\"n2\" size=\"14\" maxlength=\"25\" />	 
                            </div>                             
                            <div class=\"list\">
                                <label class=\"detail\">Apellido:</label><br />
                                <input type=\"text\" name=\"a2\" id=\"a2\" size=\"14\" maxlength=\"25\" />	 
                            </div>
                            <div class=\"list\">
                                <label class=\"detail\">Documento:</label><br />
                                <input type=\"text\" name=\"d2\" id=\"d2\" size=\"8\" maxlength=\"15\" />	 
                            </div>                               
                            <div class=\"list\">
                                <label class=\"detail\">Email:</label><br />
                                <input type=\"text\" name=\"em2\" id=\"em2\" size=\"18\" maxlength=\"50\" />	 
                            </div>                            
                            <div class=\"list\">
                                         <label class=\"detail\">Fecha de Nacimiento:</label><br />
                                         
                                         <div class=\"date\">
                                                <select name=\"fndia2\" id=\"f_dateDD2\">
                                                    <optgroup label=\"Dia\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";                                                    
					for($i=1;$i<=31;$i++)echo "<option value=".$i.">".$i."</option>";                                  echo"
                                                    </optgroup>
                                                </select>
                                         </div>                                           
                                         <div class=\"date\">       
                                                <select name=\"fnmes2\" id=\"f_dateMM2\">
                                                    <optgroup label=\"Mes\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1;$i<=12;$i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                          
                                         <div class=\"date\">       
                                                <select name=\"fnanio2\" id=\"f_dateYY2\">
                                                    <optgroup label=\"A�o\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1900;$i<= date ("Y"); $i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                                           
                            </div>                                                                                                   
                       </div> ";  
					break;
				case 3:
					//PASAJERO 1
					echo "<div id=\"travelDetails\">
                            <div class=\"list\">
                                <label class=\"detail\">Pasajero #</label>
                                <div class=\"detailNum\">1</div>
                            </div>      
                                                         
                            <div class=\"list\">
                                <label class=\"detail\">Nombre:</label><br />
                                <input type=\"text\" name=\"n1\" id=\"n1\" size=\"14\"  maxlength=\"25\" />	 
                            </div>                             
                            <div class=\"list\">
                                <label class=\"detail\">Apellido:</label><br />
                                <input type=\"text\" name=\"a1\" id=\"a1\" size=\"14\" maxlength=\"25\" />	 
                            </div>
                            <div class=\"list\">
                                <label class=\"detail\">Documento:</label><br />
                                <input type=\"text\" name=\"d1\" id=\"d1\" size=\"8\" maxlength=\"15\" />	 
                            </div>                               
                            <div class=\"list\">
                                <label class=\"detail\">Email:</label><br />
                                <input type=\"text\" name=\"em1\" id=\"em1\" size=\"18\" maxlength=\"50\" />	 
                            </div>                            
                            <div class=\"list\">
                                         <label class=\"detail\">Fecha de Nacimiento:</label><br />
                                         
                                         <div class=\"date\">
                                                <select name=\"fndia1\" id=\"f_dateDD1\">
                                                    <optgroup label=\"Dia\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";                                                    
					for($i=1;$i<=31;$i++)echo "<option value=".$i.">".$i."</option>";                                  echo"
                                                    </optgroup>
                                                </select>
                                         </div>                                           
                                         <div class=\"date\">       
                                                <select name=\"fnmes1\" id=\"f_dateMM1\">
                                                    <optgroup label=\"Mes\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1;$i<=12;$i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                          
                                         <div class=\"date\">       
                                                <select name=\"fnanio1\" id=\"f_dateYY1\">
                                                    <optgroup label=\"A�o\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1900;$i<= date ("Y"); $i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                                           
                            </div>                                                                                                   
                       </div> ";
					//PASAJERO 2
					echo "<div id=\"travelDetails\">
                            <div class=\"list\">
                                <label class=\"detail\">Pasajero #</label>
                                <div class=\"detailNum\">2</div>
                            </div>      
                                                        
                            <div class=\"list\">
                                <label class=\"detail\">Nombre:</label><br />
                                <input type=\"text\" name=\"n2\" id=\"n2\" size=\"14\" maxlength=\"25\" />	 
                            </div>                             
                            <div class=\"list\">
                                <label class=\"detail\">Apellido:</label><br />
                                <input type=\"text\" name=\"a2\" id=\"a2\" size=\"14\" maxlength=\"25\" />	 
                            </div>
                            <div class=\"list\">
                                <label class=\"detail\">Documento:</label><br />
                                <input type=\"text\" name=\"d2\" id=\"d2\" size=\"8\" maxlength=\"15\" />	 
                            </div>                               
                            <div class=\"list\">
                                <label class=\"detail\">Email:</label><br />
                                <input type=\"text\" name=\"em2\" id=\"em2\" size=\"18\" maxlength=\"50\" />	 
                            </div>                            
                            <div class=\"list\">
                                         <label class=\"detail\">Fecha de Nacimiento:</label><br />
                                         
                                         <div class=\"date\">
                                                <select name=\"fndia2\" id=\"f_dateDD2\">
                                                    <optgroup label=\"Dia\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";                                                    
					for($i=1;$i<=31;$i++)echo "<option value=".$i.">".$i."</option>";                                  echo"
                                                    </optgroup>
                                                </select>
                                         </div>                                           
                                         <div class=\"date\">       
                                                <select name=\"fnmes2\" id=\"f_dateMM2\">
                                                    <optgroup label=\"Mes\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1;$i<=12;$i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                          
                                         <div class=\"date\">       
                                                <select name=\"fnanio2\" id=\"f_dateYY2\">
                                                    <optgroup label=\"A�o\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1900;$i<= date ("Y"); $i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                                           
                            </div>                                                                                                   
                       </div> ";                        
					//PASAJERO 3
					echo "<div id=\"travelDetails\">
                            <div class=\"list\">
                                <label class=\"detail\">Pasajero #</label>
                                <div class=\"detailNum\">3</div>
                            </div>      
                                                       
                            <div class=\"list\">
                                <label class=\"detail\">Nombre:</label><br />
                                <input type=\"text\" name=\"n3\" id=\"n3\" size=\"14\" maxlength=\"25\" />	 
                            </div>                             
                            <div class=\"list\">
                                <label class=\"detail\">Apellido:</label><br />
                                <input type=\"text\" name=\"a3\" id=\"a3\" size=\"14\" maxlength=\"25\" />	 
                            </div>
                            <div class=\"list\">
                                <label class=\"detail\">Documento:</label><br />
                                <input type=\"text\" name=\"d3\" id=\"d3\" size=\"8\" maxlength=\"15\" />	 
                            </div>                               
                            <div class=\"list\">
                                <label class=\"detail\">Email:</label><br />
                                <input type=\"text\" name=\"em3\" id=\"em3\" size=\"18\" maxlength=\"50\"/>	 
                            </div>                            
                            <div class=\"list\">
                                         <label class=\"detail\">Fecha de Nacimiento:</label><br />
                                         
                                         <div class=\"date\">
                                                <select name=\"fndia3\" id=\"f_dateDD3\">
                                                    <optgroup label=\"Dia\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";                                                    
					for($i=1;$i<=31;$i++)echo "<option value=".$i.">".$i."</option>";                                  echo"
                                                    </optgroup>
                                                </select>
                                         </div>                                           
                                         <div class=\"date\">       
                                                <select name=\"fnmes3\" id=\"f_dateMM3\">
                                                    <optgroup label=\"Mes\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1;$i<=12;$i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                          
                                         <div class=\"date\">       
                                                <select name=\"fnanio3\" id=\"f_dateYY3\">
                                                    <optgroup label=\"A�o\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1900;$i<= date ("Y"); $i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                                           
                            </div>                                                                                                   
                       </div> ";                               
					break;
				case 4:
					//PASAJERO 1
					echo "<div id=\"travelDetails\">
                            <div class=\"list\">
                                <label class=\"detail\">Pasajero #</label>
                                <div class=\"detailNum\">1</div>
                            </div>      
                                                         
                            <div class=\"list\">
                                <label class=\"detail\">Nombre:</label><br />
                                <input type=\"text\" name=\"n1\" id=\"n1\" size=\"14\"  maxlength=\"25\" />	 
                            </div>                             
                            <div class=\"list\">
                                <label class=\"detail\">Apellido:</label><br />
                                <input type=\"text\" name=\"a1\" id=\"a1\" size=\"14\" maxlength=\"25\" />	 
                            </div>
                            <div class=\"list\">
                                <label class=\"detail\">Documento:</label><br />
                                <input type=\"text\" name=\"d1\" id=\"d1\" size=\"8\" maxlength=\"15\" />	 
                            </div>                               
                            <div class=\"list\">
                                <label class=\"detail\">Email:</label><br />
                                <input type=\"text\" name=\"em1\" id=\"em1\" size=\"18\" maxlength=\"50\" />	 
                            </div>                            
                            <div class=\"list\">
                                         <label class=\"detail\">Fecha de Nacimiento:</label><br />
                                         
                                         <div class=\"date\">
                                                <select name=\"fndia1\" id=\"f_dateDD1\">
                                                    <optgroup label=\"Dia\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";                                                    
					for($i=1;$i<=31;$i++)echo "<option value=".$i.">".$i."</option>";                                  echo"
                                                    </optgroup>
                                                </select>
                                         </div>                                           
                                         <div class=\"date\">       
                                                <select name=\"fnmes1\" id=\"f_dateMM1\">
                                                    <optgroup label=\"Mes\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1;$i<=12;$i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                          
                                         <div class=\"date\">       
                                                <select name=\"fnanio1\" id=\"f_dateYY1\">
                                                    <optgroup label=\"A�o\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1900;$i<= date ("Y"); $i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                                           
                            </div>                                                                                                   
                       </div> ";
					//PASAJERO 2
					echo "<div id=\"travelDetails\">
                            <div class=\"list\">
                                <label class=\"detail\">Pasajero #</label>
                                <div class=\"detailNum\">2</div>
                            </div>      
                                                        
                            <div class=\"list\">
                                <label class=\"detail\">Nombre:</label><br />
                                <input type=\"text\" name=\"n2\" id=\"n2\" size=\"14\" maxlength=\"25\" />	 
                            </div>                             
                            <div class=\"list\">
                                <label class=\"detail\">Apellido:</label><br />
                                <input type=\"text\" name=\"a2\" id=\"a2\" size=\"14\" maxlength=\"25\" />	 
                            </div>
                            <div class=\"list\">
                                <label class=\"detail\">Documento:</label><br />
                                <input type=\"text\" name=\"d2\" id=\"d2\" size=\"8\" maxlength=\"15\" />	 
                            </div>                               
                            <div class=\"list\">
                                <label class=\"detail\">Email:</label><br />
                                <input type=\"text\" name=\"em2\" id=\"em2\" size=\"18\" maxlength=\"50\" />	 
                            </div>                            
                            <div class=\"list\">
                                         <label class=\"detail\">Fecha de Nacimiento:</label><br />
                                         
                                         <div class=\"date\">
                                                <select name=\"fndia2\" id=\"f_dateDD2\">
                                                    <optgroup label=\"Dia\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";                                                    
					for($i=1;$i<=31;$i++)echo "<option value=".$i.">".$i."</option>";                                  echo"
                                                    </optgroup>
                                                </select>
                                         </div>                                           
                                         <div class=\"date\">       
                                                <select name=\"fnmes2\" id=\"f_dateMM2\">
                                                    <optgroup label=\"Mes\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1;$i<=12;$i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                          
                                         <div class=\"date\">       
                                                <select name=\"fnanio2\" id=\"f_dateYY2\">
                                                    <optgroup label=\"A�o\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1900;$i<= date ("Y"); $i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                                           
                            </div>                                                                                                   
                       </div> ";                        
					//PASAJERO 3
					echo "<div id=\"travelDetails\">
                            <div class=\"list\">
                                <label class=\"detail\">Pasajero #</label>
                                <div class=\"detailNum\">3</div>
                            </div>      
                                                       
                            <div class=\"list\">
                                <label class=\"detail\">Nombre:</label><br />
                                <input type=\"text\" name=\"n3\" id=\"n3\" size=\"14\" maxlength=\"25\" />	 
                            </div>                             
                            <div class=\"list\">
                                <label class=\"detail\">Apellido:</label><br />
                                <input type=\"text\" name=\"a3\" id=\"a3\" size=\"14\" maxlength=\"25\" />	 
                            </div>
                            <div class=\"list\">
                                <label class=\"detail\">Documento:</label><br />
                                <input type=\"text\" name=\"d3\" id=\"d3\" size=\"8\" maxlength=\"15\" />	 
                            </div>                               
                            <div class=\"list\">
                                <label class=\"detail\">Email:</label><br />
                                <input type=\"text\" name=\"em3\" id=\"em3\" size=\"18\" maxlength=\"50\"/>	 
                            </div>                            
                            <div class=\"list\">
                                         <label class=\"detail\">Fecha de Nacimiento:</label><br />
                                         
                                         <div class=\"date\">
                                                <select name=\"fndia3\" id=\"f_dateDD3\">
                                                    <optgroup label=\"Dia\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";                                                    
					for($i=1;$i<=31;$i++)echo "<option value=".$i.">".$i."</option>";                                  echo"
                                                    </optgroup>
                                                </select>
                                         </div>                                           
                                         <div class=\"date\">       
                                                <select name=\"fnmes3\" id=\"f_dateMM3\">
                                                    <optgroup label=\"Mes\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1;$i<=12;$i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                          
                                         <div class=\"date\">       
                                                <select name=\"fnanio3\" id=\"f_dateYY3\">
                                                    <optgroup label=\"A�o\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1900;$i<= date ("Y"); $i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                                           
                            </div>                                                                                                   
                       </div> ";                        
					//PASAJERO 4
					echo "<div id=\"travelDetails\">
                            <div class=\"list\">
                                <label class=\"detail\">Pasajero #</label>
                                <div class=\"detailNum\">4</div>
                            </div>      
                                                      
                            <div class=\"list\">
                                <label class=\"detail\">Nombre:</label><br />
                                <input type=\"text\" name=\"n4\" id=\"n4\" size=\"14\" maxlength=\"25\" />	 
                            </div>                             
                            <div class=\"list\">
                                <label class=\"detail\">Apellido:</label><br />
                                <input type=\"text\" name=\"a4\" id=\"a4\" size=\"14\" maxlength=\"25\"/>	 
                            </div>
                            <div class=\"list\">
                                <label class=\"detail\">Documento:</label><br />
                                <input type=\"text\" name=\"d4\" id=\"d4\" size=\"8\" maxlength=\"15\"  />	 
                            </div>                               
                            <div class=\"list\">
                                <label class=\"detail\">Email:</label><br />
                                <input type=\"text\" name=\"em4\" id=\"em4\" size=\"18\" maxlength=\"50\" />	 
                            </div>                            
                            <div class=\"list\">
                                         <label class=\"detail\">Fecha de Nacimiento:</label><br />
                                         
                                         <div class=\"date\">
                                                <select name=\"fndia4\" id=\"f_dateDD4\">
                                                    <optgroup label=\"Dia\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";                                                    
					for($i=1;$i<=31;$i++)echo "<option value=".$i.">".$i."</option>";                                  echo"
                                                    </optgroup>
                                                </select>
                                         </div>                                           
                                         <div class=\"date\">       
                                                <select name=\"fnmes4\" id=\"f_dateMM4\">
                                                    <optgroup label=\"Mes\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1;$i<=12;$i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                          
                                         <div class=\"date\">       
                                                <select name=\"fnanio4\" id=\"f_dateYY4\">
                                                    <optgroup label=\"A�o\">
                                                    <option value=\"0\"SELECTED>...</option>
                                                    ";
					for($i=1900;$i<= date ("Y"); $i++)echo "<option value=".$i.">".$i."</option>";
					echo"
                                                    </optgroup>
                                                </select> 
                                         </div>                                                           
                            </div>                                                                                                   
                       </div> ";            
					break;




			}
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}


	/**
	 * METODO QUE SE ENCARGA DE REGISTRAR LA INFORMACION DE UN POSIBLE PEDIDO EN CRECER, PERO ES UNA TABLA PARA TRANSACCIONES DE PEDIDOS QUE FALTAN POR CONFIRMAR POR PAGOS ONLINE.
	 */
	public function GenerarPedidoWeb($arregloPedido,$arregloPasajeros,$codigoTransaccion,$idPoliza,$cantidadPasajeros)
	{
		try
		{	$fechaRegistro=date("m/d/Y h:m:s" );
			//CREAMOS EL PEDIDO
			//var_dump($arregloPedido);
			$recordSett = &$this->conexion->conectarse()->Execute(" INSERT INTO PedidoWeb
		(Id, CodigoTransaccion,  IdPoliza, FechaCreacion, FechaRespuesta, NombreTitularFactura, DocumentoTitularFactura, DireccionTitularFactura, 
		TelefonoTitularFactura,EmailTitularFactura, TelefonoContacto, TelefonoMovilContacto, DireccionContacto, NombreContactoEmergencia, ApellidoContactoEmergencia, 
		TelefonoContactoEmergencia, EmailContactoEmergencia,FechaInicio,FechaFin,Precio ,Region,TrmIata, Estado)
		VALUES ( '".$arregloPedido[0]."','".$codigoTransaccion."','".$idPoliza."','".$fechaRegistro."','".$fechaRegistro."','".$arregloPedido[7]."','".$arregloPedido[8]."','".$arregloPedido[9]."','".$arregloPedido[10]."','".$arregloPedido[11]."','".$arregloPedido[5]."','".$arregloPedido[4]."','".$arregloPedido[6]."','".$arregloPedido[1]."','".$arregloPedido[2]."','".$arregloPedido[3]."','".$arregloPedido[12]."','".$arregloPedido[13]."','".$arregloPedido[14]."','".$arregloPedido[15]."','".$arregloPedido[16]."','".$this->fun->getTrmIata($idPoliza)."',3) ");	
			//CREAMOS LOS PASAJEROS DEL PEDIDO.
			//var_dump($arregloPasajeros);
			//echo "Cantidad Inicial  ".$cantidadPasajeros."<br>";
			$guardaPasajeros=0;
			$i=0;
				while($cantidadPasajeros!= $guardaPasajeros){
								
				$Nombre=$arregloPasajeros[$i++];
				$Apellido=$arregloPasajeros[$i++];
				$Documento=$arregloPasajeros[$i++];
				$Email=$arregloPasajeros[$i++];
				$FechaNacimiento=$arregloPasajeros[$i++];				
					$Idpasajero=$this->fun->NewGuid();
					$recordSett = &$this->conexion->conectarse()->Execute("INSERT INTO PasajerosPedido
						 (Id, IdPedido, Nombre, Apellido, Documento, Email, FechaNacimiento)
						 VALUES('".$Idpasajero."','".$arregloPedido[0]."','".$Nombre."','".$Apellido."','".$Documento."','".$Email."','".$FechaNacimiento."')");	
					
					$guardaPasajeros++;	
					//echo $guardaPasajeros ."<br>";
				}
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	/**
	 * METODO QUE SE ENCARGA DE REGISTRAR TODA LA INFORMACION EN CRECER, SIEMPRE Y CUANDO LA TRANSACCION SEA SATISFACTORIA
	 */
	public function GenerarPedidoCrecer($refVenta)
	{
		try
		{
			
			$fechaConfirmacion=date("m/d/Y h:m:s" );
			
			//ACTUALIZAMOS EL ESTADO DE PEDIDO WEB A CONFIRMADO Y AGREGAMOS LA FECHA DE CONFIRMACION
			//$recordSett = &$this->conexion->conectarse()->Execute("	UPDATE       PedidoWeb
			//SET                FechaRespuesta ='".$fechaConfirmacion."', Estado = 1
			//WHERE        (CodigoTransaccion = '".$refVenta."' AND Estado = 3)");	
			
			//CREAMOS EL PEDIDO EN CRECER
			//1.OBTENEMOS LA INFORMACION DEL PEDIDO DESDE LA TABLA TEMPORAL
			
			//Id--0
			//CodigoTransaccion--1
			//IdPoliza--2
			//FechaCreacion--3
			//FechaRespuesta--4
			//NombreTitularFactura--5
			//DocumentoTitularFactura--6
			//DireccionTitularFactura--7
			//TelefonoTitularFactura--8
			//EmailTitularFactura--9
			//TelefonoContacto--10
			//TelefonoMovilContacto--11
			//DireccionContacto--12
			//NombreContactoEmergencia--13
			//ApellidoContactoEmergencia--14
			//TelefonoContactoEmergencia--15
			//EmailContactoEmergencia--16
			//Estado--17
			//FechaInicio--18
			//FechaFin--19
			//Precio--20
			//Region--21
			//TrmIata--22			
			
			$pedidoWeb = &$this->conexion->conectarse()->Execute("SELECT Id, CodigoTransaccion, IdPoliza, FechaCreacion, FechaRespuesta, NombreTitularFactura, DocumentoTitularFactura, DireccionTitularFactura, TelefonoTitularFactura, EmailTitularFactura, TelefonoContacto, TelefonoMovilContacto, DireccionContacto, 
			NombreContactoEmergencia, ApellidoContactoEmergencia, TelefonoContactoEmergencia, EmailContactoEmergencia,
			 Estado, FechaInicio, FechaFin, Precio, Region, TrmIata 
			 FROM dbo.PedidoWeb		WHERE CodigoTransaccion= '".$refVenta."'");		

			//2.VALIDAMOS EL CLIENTE SI NO EXISTE CREAMOS EL CLIENTE Y SU CONTACTO.			
			$existeCliente = &$this->conexion->conectarse()->Execute("SELECT DISTINCT Identificacion,Id FROM dbo.Empresas
			WHERE Identificacion='".$pedidoWeb->fields[6]."' ");	
			
			$IdCliente="";
			//CREAMOS EL CLIENTE NUEVO 
			if($existeCliente->fields[0]==""){
				
				echo "Entramos a creacion";
				
				$IdCliente=$this->fun->NewGuid();
				$IdContacto=$this->fun->NewGuid();
				$IdPedido=$this->fun->NewGuid();
				$IdProductoCotizacion=$this->fun->NewGuid();
				$IdFactura=$this->fun->NewGuid();				
				$grupo=2;//ASESORES
				$prioridad=2;
				$seguimiento="Creado desde el portal web ". $fechaConfirmacion."\n";
				$moneda=2;//DOLARES
				$viaContacto=2;//WEB
				$formaPago=1;
				//CREAMOS LA EMPRESA
				$crearCliente = &$this->conexion->conectarse()->Execute( "INSERT INTO Empresas
                      (Id, TipoEmpresa, Identificacion, Dv, RazonSocial, Antiguedad, Telefono, Fax, Direccion, Mail, Url, Ciudad, Departamento, Pais, Aniversario, TieneAniversario, 
                      FechaIngreso, IdActividadEconomica, Movil, Observaciones, SeguimientoHistorico, Estado, IdAsesor, RepresentanteLegal, IdTipoMonedaImportacion, 
                      TipoNacionalidad, IdEmpleadoModif, Imagen)
						VALUES     ('".$IdCliente."','N/A','".$pedidoWeb->fields[6]."','N','".$pedidoWeb->fields[5]."','0',
						'".$pedidoWeb->fields[8]."','0','".$pedidoWeb->fields[7]."','".$pedidoWeb->fields[9]."','-',NULL,NULL,
						NULL,NULL,NULL,'".$fechaConfirmacion."',
						NULL,'".$pedidoWeb->fields[11]."','Ninguna',
						NULL,'0',NULL,'Ninguno',
						'2','false',NULL,
						NULL)");
				
				//CREAMOS EL CLIENTE
				$crearCliente = &$this->conexion->conectarse()->Execute( "INSERT INTO Clientes
               (Id, Ingreso, Inicio, Fin, CodigoSwift, IdTipoCliente, IdActividadEconomica)
				VALUES        ('".$IdCliente."','".$fechaConfirmacion."','".$fechaConfirmacion."',NULL,'0',NULL,'0')");
				
				//NOTIFICAMOS DE LA COMPRA AL TITLULAR DE LA FACTURA
				/////////$this->fun->SendMailConfirmacionPago($pedidoWeb->fields[9], $pedidoWeb->fields[5], $pedidoWeb->fields[6]);
				
				
				//CREAMOS EL CONTACTO.				
				$crearContacto= &$this->conexion->conectarse()->Execute("INSERT INTO Contactos(Id, Descripcion, Cargo, Direccion, Telefono, Extension, Celular, Fax, EmailEmpresa, EmailPersonal, Observacion, Cumpleanno, TieneCumpleanno, Estado)
				VALUES  ('".$IdContacto."','".$pedidoWeb->fields[13]." ".$pedidoWeb->fields[14]."',NULL,NULL,'".$pedidoWeb->fields[15]."',NULL,NULL,NULL,'".$pedidoWeb->fields[16]."','".$pedidoWeb->fields[16]."',NULL,NULL,NULL,'true')");
				
				$asociarContacto= &$this->conexion->conectarse()->Execute(" INSERT INTO EmpresaContactos     (IdEmpresa, IdContacto)
				VALUES        ('".$IdCliente."','".$IdContacto."')");

				//CREAMOS EL PEDIDO
				
					$crearPedido = &$this->conexion->conectarse()->Execute("INSERT INTO OrdenCompraCliente
                         (Id, FechaElaboracion, IdCliente, IdPaisOrigen, IdSedeCliente, IdRegionDestino, IdContactoEmergencia, FechaSalida, FechaRegreso, CantidadPasajeros, IdContacto, 
                         Codigo, IdAutor, IdEmpleado, FechaModificacion, SubtotalSinDto, Subtotal, ValorIva, Total, Trm_dia, UtilidadSobreCosto, Estado, GrupoAsignado, Prioridad, 
                         Probabilidad, Observaciones, SeguimientoHistorico, FechaRecepcion, Moneda, FormaPago, TiempoEntrega, TiempoVigencia,  Instalacion, 
                         IdEmpleadoModif, IdViadeContacto)
							VALUES ('".$IdPedido."','".$fechaConfirmacion."','".$IdCliente."','1',
							'00000000-0000-0000-0000-000000000000','".$pedidoWeb->fields[21]."',
							'".$IdContacto."','".$pedidoWeb->fields[18]."','".$pedidoWeb->fields[19]."','0','".$IdContacto."','',
							'7e33a6e3-f03d-4211-9ef3-767aa2fa56fc','7e33a6e3-f03d-4211-9ef3-767aa2fa56fc','".$fechaConfirmacion."','".$pedidoWeb->fields[20]."','".$pedidoWeb->fields[20]."','0','".$pedidoWeb->fields[20]."','".$pedidoWeb->fields[22]."',
							'true','1','".$grupo."','".$prioridad."','100',NULL,'".$seguimiento."',
							'".$fechaConfirmacion."','".$moneda."','".$formaPago."',NULL,NULL,'false','00000000-0000-0000-0000-000000000000','".$viaContacto."')");
					//CREAMOS EL PRODUCTO COTIZACION.			
							
				
						// OBTENEMOS LA CANTIDAD DE PASAJEROS.						
						$cantidadPasajeros = &$this->conexion->conectarse()->Execute("SELECT     COUNT(*) AS Expr1
						FROM         PasajerosPedido
						WHERE     (IdPedido = '".$pedidoWeb->fields[0]."')");

						
						$productoCotizacion = &$this->conexion->conectarse()->Execute("INSERT INTO ProductosCotizacion
                         (Id, IdProducto, IdReferencia, Cantidad, ValorVenta, SubtotalSinDescuento, ValorVentaCliente, IVA, AplicarIva, IdFormaEnvio, TipoTrasporte, UtilidadGlobal, Utilidad, 
                         UtilidadEnPorcentaje, UtilidadDespuesCosto, Arancel, ComicionProveedor, IdEmpleado, FechaModificacion, FechaElaboracion, Moneda, ComentarioAdicional, 
                         Descuento, Aumento)
							VALUES        ('".$IdProductoCotizacion."','".$pedidoWeb->fields[2]."','".$IdPedido."','".$cantidadPasajeros->fields[0]."','".$pedidoWeb->fields[20]."','".$pedidoWeb->fields[20]."','".$pedidoWeb->fields[20]."',
							'0','true','0','0','0','0','true','false','0',
							'0','7e33a6e3-f03d-4211-9ef3-767aa2fa56fc','".$fechaConfirmacion."','".$fechaConfirmacion."','4','','0','0')");			
				
				
				//CREAMOS EL PASAJERO PRODUCTO COTIZACION.
						//CONSULTAMOS LOS PASAJEROS ASOCIADOS AL PEDIDO						
						$pedidoPasajero = &$this->conexion->conectarse()->Execute("SELECT Id, IdPedido, Nombre, Apellido, Documento, Email, FechaNacimiento
							FROM         PasajerosPedido 
							WHERE     (IdPedido = '".$pedidoWeb->fields[0]."')");		
						foreach($pedidoPasajero as $k => $row) {
							
							$idPasajero="";
							$numeroPoliza="";// ACA DEBO LLAMAR EL WEBSERVICE
							$idPasajeroProducto=$this->fun->NewGuid();							
							$existePasajero = &$this->conexion->conectarse()->Execute("SELECT     Id
								FROM         Pasajero
								WHERE     (Identificacion = '". $row[4]."')");								
					
							
							//NOTIFICAMOS A LOS PASAJEROS DE LA COMPRA							
								
							///////////$this->fun->SendMailConfirmacionPago($row[5], $row[2], $row[3]);
			
							
							if($existePasajero->fields[0]==""){
								
								//CREAMOS PASAJERO								
								$idPasajero=$this->fun->NewGuid();												
								$existePasajero = &$this->conexion->conectarse()->Execute("
								INSERT INTO Pasajero
                         		(Id, Nombre, Apellido, Identificacion, FechaNacimiento, Telefono, Celular, Email, Estado, Direccion, Observaciones, SeguimientoHistorico)
								VALUES        ('".$idPasajero."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[6]."','".$pedidoWeb->fields[10]."','".$pedidoWeb->fields[11]."','".$row[5]."','true','".$pedidoWeb->fields[12]."','-','".$seguimiento."')");	
								
								
								
								//ASOCIAMOS EL CONTACTO DE EMERGENCIA
								$asociarContacto= &$this->conexion->conectarse()->Execute(" INSERT INTO EmpresaContactos     (IdEmpresa, IdContacto)
								VALUES        ('".$idPasajero."','".$IdContacto."')");
								
								
								//ASOCIAMOS AL PASAJERO PRODUCTO COTIZACION	
								$asociamospasajero = &$this->conexion->conectarse()->Execute("
									INSERT INTO PasajerosProductosCotizacion (Id, IdPasajero, IdProductoCotizacion, Poliza, Estado, Aumento, Descuento, ValorUnitario)
									VALUES        ('".$idPasajeroProducto."','".$idPasajero."','".$IdProductoCotizacion."','".$numeroPoliza."','true','0','0','0')");
								
							
							
							}
							else if($existePasajero->fields[0]!=""){
							//	echo "Entramos al caso cuando el pasajero ya existe";
								$idPasajero=$existePasajero->fields[0];		
									//ASOCIAMOS EL CONTACTO DE EMERGENCIA
								
								$asociarContacto= &$this->conexion->conectarse()->Execute(" INSERT INTO EmpresaContactos     (IdEmpresa, IdContacto)
								VALUES        ('".$idPasajero."','".$IdContacto."')");
																
									//ASOCIAMOS AL PASAJERO PRODUCTO COTIZACION			
														
								$asociamospasajero = &$this->conexion->conectarse()->Execute("
									INSERT INTO PasajerosProductosCotizacion (Id, IdPasajero, IdProductoCotizacion, Poliza, Estado, Aumento, Descuento, ValorUnitario)
									VALUES        ('".$idPasajeroProducto."','".$idPasajero."','".$IdProductoCotizacion."','".$numeroPoliza."','true','0','0','0')");
						
								
							}
							
							
						}					
				
				
				//CREAMOS FACTURA.				
				//CREAMOS FACTURA ORDEN COMPRA.				
				//CREAMOS ALERTAS FACTURACION.
				
				
			}
			//EL CLIENTE YA EXISTE - ASOCIAMOS TODO EL PEDIDO
			else if($existeCliente->fields[0]!="") {
				
				
				
				
				$IdCliente=$existeCliente->fields[1];						
				$IdContacto=$this->fun->NewGuid();
				$IdPedido=$this->fun->NewGuid();
				$IdProductoCotizacion=$this->fun->NewGuid();
				$IdFactura=$this->fun->NewGuid();				
				$grupo=2;//ASESORES
				$prioridad=2;
				$seguimiento="Creado desde el portal web ". $fechaConfirmacion."\n";
				$moneda=2;//DOLARES
				$viaContacto=2;//WEB
				$formaPago=1;
				
				//CREAMOS EL CONTACTO.				
				$crearContacto= &$this->conexion->conectarse()->Execute("INSERT INTO Contactos(Id, Descripcion, Cargo, Direccion, Telefono, Extension, Celular, Fax, EmailEmpresa, EmailPersonal, Observacion, Cumpleanno, TieneCumpleanno, Estado)
				VALUES  ('".$IdContacto."','".$pedidoWeb->fields[13]." ".$pedidoWeb->fields[14]."',NULL,NULL,'".$pedidoWeb->fields[15]."',NULL,NULL,NULL,'".$pedidoWeb->fields[16]."','".$pedidoWeb->fields[16]."',NULL,NULL,NULL,'true')");
				
				$asociarContacto= &$this->conexion->conectarse()->Execute(" INSERT INTO EmpresaContactos     (IdEmpresa, IdContacto)
				VALUES        ('".$IdCliente."','".$IdContacto."')");

				//CREAMOS EL PEDIDO
				
				$crearPedido = &$this->conexion->conectarse()->Execute("INSERT INTO OrdenCompraCliente
                         (Id, FechaElaboracion, IdCliente, IdPaisOrigen, IdSedeCliente, IdRegionDestino, IdContactoEmergencia, FechaSalida, FechaRegreso, CantidadPasajeros, IdContacto, 
                         Codigo, IdAutor, IdEmpleado, FechaModificacion, SubtotalSinDto, Subtotal, ValorIva, Total, Trm_dia, UtilidadSobreCosto, Estado, GrupoAsignado, Prioridad, 
                         Probabilidad, Observaciones, SeguimientoHistorico, FechaRecepcion, Moneda, FormaPago, TiempoEntrega, TiempoVigencia,  Instalacion, 
                         IdEmpleadoModif, IdViadeContacto)
							VALUES ('".$IdPedido."','".$fechaConfirmacion."','".$IdCliente."','1',
							'00000000-0000-0000-0000-000000000000','".$pedidoWeb->fields[21]."',
							'".$IdContacto."','".$pedidoWeb->fields[18]."','".$pedidoWeb->fields[19]."','0','".$IdContacto."','',
							'7e33a6e3-f03d-4211-9ef3-767aa2fa56fc','7e33a6e3-f03d-4211-9ef3-767aa2fa56fc','".$fechaConfirmacion."','".$pedidoWeb->fields[20]."','".$pedidoWeb->fields[20]."','0','".$pedidoWeb->fields[20]."','".$pedidoWeb->fields[22]."',
							'true','1','".$grupo."','".$prioridad."','100',NULL,'".$seguimiento."',
							'".$fechaConfirmacion."','".$moneda."','".$formaPago."',NULL,NULL,'false','00000000-0000-0000-0000-000000000000','".$viaContacto."')");
				         //CREAMOS EL PRODUCTO COTIZACION.			
							
				
						// OBTENEMOS LA CANTIDAD DE PASAJEROS.						
						$cantidadPasajeros = &$this->conexion->conectarse()->Execute("SELECT     COUNT(*) AS Expr1
						FROM         PasajerosPedido
						WHERE     (IdPedido = '".$pedidoWeb->fields[0]."')");

						
						$productoCotizacion = &$this->conexion->conectarse()->Execute("INSERT INTO ProductosCotizacion
                         (Id, IdProducto, IdReferencia, Cantidad, ValorVenta, SubtotalSinDescuento, ValorVentaCliente, IVA, AplicarIva, IdFormaEnvio, TipoTrasporte, UtilidadGlobal, Utilidad, 
                         UtilidadEnPorcentaje, UtilidadDespuesCosto, Arancel, ComicionProveedor, IdEmpleado, FechaModificacion, FechaElaboracion, Moneda, ComentarioAdicional, 
                         Descuento, Aumento)
							VALUES        ('".$IdProductoCotizacion."','".$pedidoWeb->fields[2]."','".$IdPedido."','".$cantidadPasajeros->fields[0]."','".$pedidoWeb->fields[20]."','".$pedidoWeb->fields[20]."','".$pedidoWeb->fields[20]."',
							'0','true','0','0','0','0','true','false','0',
							'0','7e33a6e3-f03d-4211-9ef3-767aa2fa56fc','".$fechaConfirmacion."','".$fechaConfirmacion."','4','','0','0')");			
				
				
				//CREAMOS EL PASAJERO PRODUCTO COTIZACION.
						//CONSULTAMOS LOS PASAJEROS ASOCIADOS AL PEDIDO						
						$pedidoPasajero = &$this->conexion->conectarse()->Execute("SELECT Id, IdPedido, Nombre, Apellido, Documento, Email, FechaNacimiento
							FROM         PasajerosPedido 
							WHERE     (IdPedido = '".$pedidoWeb->fields[0]."')");		
						foreach($pedidoPasajero as $k => $row) {
							
							$idPasajero="";
							$numeroPoliza="";// ACA DEBO LLAMAR EL WEBSERVICE
							$idPasajeroProducto=$this->fun->NewGuid();							
							$existePasajero = &$this->conexion->conectarse()->Execute("SELECT     Id
								FROM         Pasajero
								WHERE     (Identificacion = '". $row[4]."')");								
					
							//NOTIFICAMOS A LOS PASAJEROS DE LA COMPRA							
								
						///////////	$this->fun->SendMailConfirmacionPago($row[5], $row[2], $row[3]);
			
							if($existePasajero->fields[0]==""){
								
								//CREAMOS PASAJERO								
								$idPasajero=$this->fun->NewGuid();												
								$existePasajero = &$this->conexion->conectarse()->Execute("
								INSERT INTO Pasajero
                         		(Id, Nombre, Apellido, Identificacion, FechaNacimiento, Telefono, Celular, Email, Estado, Direccion, Observaciones, SeguimientoHistorico)
								VALUES        ('".$idPasajero."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[6]."','".$pedidoWeb->fields[10]."','".$pedidoWeb->fields[11]."','".$row[5]."','true','".$pedidoWeb->fields[12]."','-','".$seguimiento."')");	
								//ASOCIAMOS EL CONTACTO DE EMERGENCIA
								
								$asociarContacto= &$this->conexion->conectarse()->Execute(" INSERT INTO EmpresaContactos     (IdEmpresa, IdContacto)
								VALUES        ('".$idPasajero."','".$IdContacto."')");
								
								
								//ASOCIAMOS AL PASAJERO PRODUCTO COTIZACION	
								$asociamospasajero = &$this->conexion->conectarse()->Execute("
									INSERT INTO PasajerosProductosCotizacion (Id, IdPasajero, IdProductoCotizacion, Poliza, Estado, Aumento, Descuento, ValorUnitario)
									VALUES        ('".$idPasajeroProducto."','".$idPasajero."','".$IdProductoCotizacion."','".$numeroPoliza."','true','0','0','0')");
								
							}
							else if($existePasajero->fields[0]!=""){
							//	echo "Entramos al caso cuando el pasajero ya existe";
								$idPasajero=$existePasajero->fields[0];		
									//ASOCIAMOS EL CONTACTO DE EMERGENCIA
								
								$asociarContacto= &$this->conexion->conectarse()->Execute(" INSERT INTO EmpresaContactos     (IdEmpresa, IdContacto)
								VALUES        ('".$idPasajero."','".$IdContacto."')");
																
									//ASOCIAMOS AL PASAJERO PRODUCTO COTIZACION			
														
								$asociamospasajero = &$this->conexion->conectarse()->Execute("
									INSERT INTO PasajerosProductosCotizacion (Id, IdPasajero, IdProductoCotizacion, Poliza, Estado, Aumento, Descuento, ValorUnitario)
									VALUES        ('".$idPasajeroProducto."','".$idPasajero."','".$IdProductoCotizacion."','".$numeroPoliza."','true','0','0','0')");
						
								
							}
							
							
						}					
				
				
			
			}
			




			
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
}

?>