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
                                                    <optgroup label=\"Año\">
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
                                                    <optgroup label=\"Año\">
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
                                                    <optgroup label=\"Año\">
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
                                                    <optgroup label=\"Año\">
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
                                                    <optgroup label=\"Año\">
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
                                                    <optgroup label=\"Año\">
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
                                                    <optgroup label=\"Año\">
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
                                                    <optgroup label=\"Año\">
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
                                                    <optgroup label=\"Año\">
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
                                                    <optgroup label=\"Año\">
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
	public function GenerarPedidoWeb($arregloPedido,$arregloPasajeros,$codigoTransaccion,$idPoliza)
	{
		try
		{

			$fechaRegistro=date("m/d/Y");
			//CREAMOS EL PEDIDO
			//var_dump($arregloPedido);
			$recordSett = &$this->conexion->conectarse()->Execute(" INSERT INTO PedidoWeb
		(Id, CodigoTransaccion,  IdPoliza, FechaCreacion, FechaRespuesta, NombreTitularFactura, DocumentoTitularFactura, DireccionTitularFactura, 
		TelefonoTitularFactura,EmailTitularFactura, TelefonoContacto, TelefonoMovilContacto, DireccionContacto, NombreContactoEmergencia, ApellidoContactoEmergencia, 
		TelefonoContactoEmergencia, EmailContactoEmergencia, Estado)
		VALUES ( '".$arregloPedido[0]."','".$codigoTransaccion."','".$idPoliza."','".$fechaRegistro."','".$fechaRegistro."','".$arregloPedido[7]."','".$arregloPedido[8]."','".$arregloPedido[9]."','".$arregloPedido[10]."','".$arregloPedido[11]."','".$arregloPedido[5]."','".$arregloPedido[4]."','".$arregloPedido[6]."','".$arregloPedido[1]."','".$arregloPedido[2]."','".$arregloPedido[3]."','".$arregloPedido[12]."',1) ");	


			//CREAMOS LOS PASAJEROS DEL PEDIDO.

				
			//var_dump($arregloPasajeros);
			for ($i=0;$i<= count($arregloPasajeros);$i++){
					


				$Nombre=$arregloPasajeros[$i++];
				$Apellido=$arregloPasajeros[$i++];
				$Documento=$arregloPasajeros[$i++];
				$Email=$arregloPasajeros[$i++];

				$FechaNacimiento=$arregloPasajeros[$i++];

				if($i%3==0){
					echo "i".$i;
					$Idpasajero=$this->fun->NewGuid();
					$recordSett = &$this->conexion->conectarse()->Execute("INSERT INTO PasajerosPedido
                         (Id, IdPedido, Nombre, Apellido, Documento, Email, FechaNacimiento)
VALUES        ('".$Idpasajero."','".$arregloPedido[0]."','".$Nombre."','".$Apellido."','".$Documento."','".$Email."','".$FechaNacimiento."')");	

						

				}
					
					
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
	public function GenerarPedidoCrecer($arregloPasajeros,$arregloFacturaion,$arregloEmergencia,$arregloProducto)
	{
		try
		{
			//CREAMOS EL PEDIDO EN CRECER



			//CREAMOS PASAJEROS Y LOS ASOCIAMOS AL PEDIDO





			//CREAMOS LA FACTURA




			//ASOCIAMOS LA FACTURA CON EL PEDIDO





			$recordSett = &$this->conexion->conectarse()->Execute("SELECT  TOP 5  Coberturas.Id, Coberturas.Descripcion, Coberturas.Estado, CategoriaCoberturas.Descripcion AS ValorCobertura
			FROM  CategoriaCoberturas INNER JOIN  Coberturas ON CategoriaCoberturas.IdCobertura = Coberturas.Id
			WHERE IdCategoria =". $idCategoria." ORDER BY Coberturas.Codigo");	
			return $recordSett;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
}
?>