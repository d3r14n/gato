<?php

	$si = $_GET['si'];
	$sc = $_GET['sc'];
	$sd = $_GET['sd'];
	$ci = $_GET['ci'];
	$cc = $_GET['cc'];
	$cd = $_GET['cd'];
	$ii = $_GET['ii'];
	$ic = $_GET['ic'];
	$id = $_GET['id'];

	if($cc=="")
	{
		echo "cc";
	}
	else
	{
		if($si=="O"&&$sc=="O"&&$sd=="")
		{
			echo "sd";
		}
		else
		{
			if($sc=="O"&&$sd=="O"&&$si=="")
			{
				echo "si";
			}
			else
			{
				if($si=="O"&&$sd=="O"&&$sc=="")
				{
					echo "sc";
				}
				else
				{
					if($ci=="O"&&$cc=="O"&&$cd=="")
					{
						echo "cd";
					}
					else
					{
						if($cc=="O"&&$cd=="O"&&$ci=="")
						{
							echo "ci";
						}
						else
						{
							if($ii=="O"&&$ic=="O"&&$id=="")
							{
								echo "id";
							}
							else
							{
								if($ic=="O"&&$id=="O"&&$ii=="")
								{
									echo "ii";
								}
								else
								{
									if($ii=="O"&&$id=="O"&&$ic=="")
									{
										echo "ic";
									}
									else
									{
										if($si=="O"&&$ci=="O"&&$ii=="")
										{
											echo "ii";
										}
										else
										{
											if($ci=="O"&&$ii=="O"&&$si=="")
											{
												echo "si";
											}
											else
											{
												if($si=="O"&&$ii=="O"&&$ci=="")
												{
													echo "ci";
												}
												else
												{
													if($sc=="O"&&$cc=="O"&&$ic=="")
													{
														echo "ic";
													}
													else
													{
														if($cc=="O"&&$ic=="O"&&$sc=="")
														{
															echo "sc";
														}
														else
														{
															if($sd=="O"&&$cd=="O"&&$id=="")
															{
																echo "id";
															}
															else
															{
																if($cd=="O"&&$id=="O"&&$sd=="")
																{
																	echo "sd";
																}
																else
																{
																	if($sd=="O"&&$id=="O"&&$cd=="")
																	{
																		echo "cd";
																	}
																	else
																	{
																		if($si=="O"&&$cc=="O"&&$id=="")
																		{
																			echo "id";
																		}
																		else
																		{
																			if($cc=="O"&&$id=="O"&&$si=="")
																			{
																				echo "si";
																			}
																			else
																			{
																				if($sd=="O"&&$cc=="O"&&$ii=="")
																				{
																					echo "ii";
																				}
																				else
																				{
																					if($cc=="O"&&$ii=="O"&&$sd=="")
																					{
																						echo "sd";
																					}
																					else
																					{
																						if($si=="X"&&$sc=="X"&&$sd=="")
																						{
																							echo "sd";
																						}
																						else
																						{
																							if($sc=="X"&&$sd=="X"&&$si=="")
																							{
																								echo "si";
																							}
																							else
																							{
																								if($si=="X"&&$sd=="X"&&$sc=="")
																								{
																									echo "sc";
																								}
																								else
																								{
																									if($ci=="X"&&$cc=="X"&&$cd=="")
																									{
																										echo "cd";
																									}
																									else
																									{
																										if($cc=="X"&&$cd=="X"&&$ci=="")
																										{
																											echo "ci";
																										}
																										else
																										{
																											if($ii=="X"&&$ic=="X"&&$id=="")
																											{
																												echo "id";
																											}
																											else
																											{
																												if($ic=="X"&&$id=="X"&&$ii=="")
																												{
																													echo "ii";
																												}
																												else
																												{
																													if($ii=="X"&&$id=="X"&&$ic=="")
																													{
																														echo "ic";
																													}
																													else
																													{
																														if($si=="X"&&$ci=="X"&&$ii=="")
																														{
																															echo "ii";
																														}
																														else
																														{
																															if($ci=="X"&&$ii=="X"&&$si=="")
																															{
																																echo "si";
																															}
																															else
																															{
																																if($si=="X"&&$ii=="X"&&$ci=="")
																																{
																																	echo "ci";
																																}
																																else
																																{
																																	if($sc=="X"&&$cc=="X"&&$ic=="")
																																	{
																																		echo "ic";
																																	}
																																	else
																																	{
																																		if($cc=="X"&&$ic=="X"&&$sc=="")
																																		{
																																			echo "sc";
																																		}
																																		else
																																		{
																																			if($sd=="X"&&$cd=="X"&&$id=="")
																																			{
																																				echo "id";
																																			}
																																			else
																																			{
																																				if($cd=="X"&&$id=="X"&&$sd=="")
																																				{
																																					echo "sd";
																																				}
																																				else
																																				{
																																					if($sd=="X"&&$id=="X"&&$cd=="")
																																					{
																																						echo "cd";
																																					}
																																					else
																																					{
																																						if($si=="X"&&$cc=="X"&&$id=="")
																																						{
																																							echo "id";
																																						}
																																						else
																																						{
																																							if($si=="X"&&$cc=="X"&&$id=="O"&&$sd==""||$si=="X"&&$cc=="X"&&$id=="O"&&$ii=="")
																																							{
																																								if($sd=="")
																																								{
																																									echo "sd";
																																								}
																																								else
																																								{
																																									if($ii=="")
																																									{
																																										echo "ii";
																																									}
																																								}
																																							}
																																							else
																																							{
																																									if($cc=="X"&&$id=="X"&&$si=="")
																																								{
																																									echo "si";
																																								}
																																								else
																																								{
																																									if($cc=="X"&&$id=="X"&&$si=="O"&&$sd==""||$cc=="X"&&$id=="X"&&$si=="O"&&$ii=="")
																																									{
																																										if($sd=="")
																																										{
																																											echo "sd";
																																										}
																																										else
																																										{
																																											if($ii=="")
																																											{
																																												echo "ii";
																																											}
																																										}
																																									}
																																									else
																																									{
																																										if($sd=="X"&&$cc=="X"&&$ii=="")
																																										{
																																											echo "ii";
																																										}
																																										else
																																										{
																																											if($sd=="X"&&$cc=="X"&&$ii=="O"&&$si==""||$sd=="X"&&$cc=="X"&&$ii=="O"&&$id=="")
																																											{
																																												if($si=="")
																																												{
																																													echo "si";
																																												}
																																												else
																																												{
																																													if($id=="")
																																													{
																																														echo "id";
																																													}
																																												}
																																											}
																																											else
																																											{
																																												if($cc=="X"&&$ii=="X"&&$sd=="")
																																												{
																																													echo "sd";
																																												}
																																												else
																																												{
																																													if($cc=="X"&&$ii=="X"&&$sd=="O"&&$si==""||$cc=="X"&&$ii=="X"&&$sd=="O"&&$id=="")
																																													{
																																														if($si=="")
																																														{
																																															echo "si";
																																														}
																																														else
																																														{
																																															if($id=="")
																																															{
																																																echo "id";
																																															}
																																														}
																																													}
																																													else
																																													{
																																														if($si!=""&&$sc!=""&&$sd!=""&&$ci!=""&&$cd!=""&&$ii!=""&&$ic!=""&&$id!="")
																																														{
																																															echo "0";
																																														}
																																														else
																																														{
																																															seleccionarCasilla:
																																																$casilla = rand(1, 8);
																																																switch($casilla)
																																																{
																																																	case 1:
																																																		if($si=="")
																																																		{
																																																			echo "si";
																																																		}
																																																		else
																																																		{
																																																			goto seleccionarCasilla;
																																																		}
																																																	break;
																																																	case 2:
																																																		if($si=="")
																																																		{
																																																			echo "si";
																																																		}
																																																		else
																																																		{
																																																			if($sc=="")
																																																			{
																																																				echo "sc";
																																																			}
																																																			else
																																																			{
																																																				goto seleccionarCasilla;
																																																			}
																																																		}
																																																	break;
																																																	case 3:
																																																		if($sd=="")
																																																		{
																																																			echo "sd";
																																																		}
																																																		else
																																																		{
																																																			goto seleccionarCasilla;
																																																		}
																																																	break;
																																																	case 4:
																																																		if($sd=="")
																																																		{
																																																			echo "sd";
																																																		}
																																																		else
																																																		{
																																																			if($ci=="")
																																																			{
																																																				echo "ci";
																																																			}
																																																			else
																																																			{
																																																				goto seleccionarCasilla;
																																																			}
																																																		}
																																																	break;
																																																	case 5:
																																																		if($ii=="")
																																																		{
																																																			echo "ii";
																																																		}
																																																		else
																																																		{
																																																			if($cd=="")
																																																			{
																																																				echo "cd";
																																																			}
																																																			else
																																																			{
																																																				goto seleccionarCasilla;
																																																			}
																																																		}
																																																	break;
																																																	case 6:
																																																		if($ii=="")
																																																		{
																																																			echo "ii";
																																																		}
																																																		else
																																																		{
																																																			goto seleccionarCasilla;
																																																		}
																																																	break;
																																																	case 7:
																																																		if($id=="")
																																																		{
																																																			echo "id";
																																																		}
																																																		else
																																																		{
																																																			if($ic=="")
																																																			{
																																																				echo "ic";
																																																			}
																																																			else
																																																			{
																																																				goto seleccionarCasilla;
																																																			}
																																																		}
																																																	break;
																																																	case 8:
																																																		if($id=="")
																																																		{
																																																			echo "id";
																																																		}
																																																		else
																																																		{
																																																			goto seleccionarCasilla;
																																																		}
																																																	break;
																																																}
																																														}
																																													}
																																												}
																																											}
																																										}
																																									}
																																								}
																																							}
																																						}
																																					}
																																				}
																																			}
																																		}
																																	}
																																}
																															}
																														}
																													}
																												}
																											}
																										}
																									}
																								}
																							}
																						}
																					}
																				}
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}

?>