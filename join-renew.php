<?php
$get_string = NULL;
$jump_url   = NULL;

// set URLs
$contribute_url = 'https://www.imba.com/civicrm/contribute/transact?reset=1&id=';
// IMBA
$retail_url		= $contribute_url . '6' . $get_string;
$promoter_url	= $contribute_url . '7' . $get_string;
$club_url		= $contribute_url . '8' . $get_string;
$patroller_url	= $contribute_url . '10' . $get_string;
$pgroup_url		= $contribute_url . '9' . $get_string;
$corp_url		= 'https://www.imba.com/membership/corporate';
$imba_ind_url	= $contribute_url . '1&custom_76=No Region&custom_77=Unassigned' . $get_string;
$imba_fam_url	= $contribute_url . '2&custom_76=No Region&custom_77=Unassigned' . $get_string;
$team_imba_url	= 'https://www.imba.com/team-imba' . $get_string;
// SORBA
$sorba_ind_url	= $contribute_url . '22' . $get_string;
$sorba_fam_url	= $contribute_url . '23' . $get_string;

// Chapters
$url = array(
	'MORC-MN' => array('fam'    => 14, 
					 'ind'    => 13, 
					 'region' => 'Midwest', 
					 'name'   => 'Minnesota Off-Road Cyclists (MORC)'),
	'MORCA' => array('fam'    => 54, 
					 'ind'    => 55, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Monterey Off-Road Cyclists Association (MORCA)'),
	'DTS' => array('fam'    => 18, 
					 'ind'    => 17, 
					 'region' => 'Atlantic', 
					 'name'   => 'Delaware Trail Spinners (DTS)'),
	'NWTA' => array('fam'    => 16, 
					 'ind'    => 15, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Northwest Trail Alliance (NWTA)'),
	'GOATS' => array('fam'    => 19, 
					 'ind'    => 21, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Greater Oakridge Area Trail Stewards (GOATS) '),
	'COMBA' => array('fam'    => 42, 
					 'ind'    => 41, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Colorado Mountain Bike Association (COMBA)'),
	'CORBA' => array('fam'    => 52, 
					 'ind'    => 53, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Concerned Off-Road Bicyclists Association (CORBA)'),
	'DOD' => array('fam'    => 57, 
					 'ind'    => 56, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Disciples of Dirt (DOD)'),
	'CITA' => array('fam'    => 77,
					 'ind'    => 78,
					 'region' => 'Midwest',
					 'name'   => 'Central Iowa Trail Association (CITA)'),
	'CTHC' => array('fam'    => 80,
					 'ind'    => 79,
					 'region' => 'Great Lakes',
					 'name'   => 'Copper Harbor Trails Club (CTHC)'),
	'SFFTS' => array('fam'    => 82,
					 'ind'    => 81,
					 'region' => 'Southwest',
					 'name'   => 'Santa Fe Fat Tire Society (SFFTS)'),
	'VVMBA' => array('fam'    => 83, 
					 'ind'    => 84, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Vail Valley Mountain Bike Association (VVMBA)'),
	'CAMBC' => array('fam'    => 86, 
					 'ind'    => 85,
					 'region' => 'Atlantic', 
					 'name'   => 'Charlottesville Area Mountain Bike Club (CAMBC)'),
	'RVMBA' => array('fam'    => 88, 
					 'ind'    => 89, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Rogue Valley Mountain Bike Association (RVMBA)'),
	'SBMTV' => array('fam'    => 90, 
					 'ind'    => 91, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Santa Barbara Mountain Bike Trail Volunteers (SBMTV)'),
	'CORP'  => array('fam'    => 92, 
					 'ind'    => 93, 
					 'region' => 'Midwest', 
					 'name'   => 'Capital Off Road Pathfinders (CORP)'),
	'COGGS' => array('fam'    => 94, 
					 'ind'    => 95, 
					 'region' => 'Midwest', 
					 'name'   => 'Cyclists of Gitchee Gumee Shores (COGGS)'),
	'CRAMBA'=> array('fam'    => 96, 
					 'ind'    => 97, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Clinton River Area Mountain Bike Association (CRAMBA)'),
	'HMBA'  => array('fam'    => 98, 
					 'ind'    => 99, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Hoosier Mountain Bike Association (HMBA)'),
	'MMMBA' => array('fam'    => 100, 
					 'ind'    => 101, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Mid-Michigan Mountain Biking Association (MMMBA)'),
	'NMMBA' => array('fam'    => 102, 
					 'ind'    => 103, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Northern Michigan Mountain Biking Association (NMMBA)'),
	'SNMBA' => array('fam'    => 104, 
					 'ind'    => 105, 
					 'region' => 'Southwest', 
					 'name'   => 'Southern Nevada Mountain Bike Association (SNMBA)'),
	'WMMBA' => array('fam'    => 106, 
					 'ind'    => 107, 
					 'region' => 'Great Lakes', 
					 'name'   => 'West Michigan Mountain Biking Alliance (WMMBA)'),
	'LASA'  => array('fam'    => 121, 
					 'ind'    => 122, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Los Alamos Tuff Riders (LATR)'),
	'MWBA'  => array('fam'    => 123, 
					 'ind'    => 124, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Mount Wilson Bicycling Association (MWBA)'),
	'WRBC'  => array('fam'    => 117, 
					 'ind'    => 118, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Wood River Bicycle Coalition (WRBC)'),
	'BAMBA' => array('fam'    => 51, 
					 'ind'    => 50, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Boise Area Mountain Bike Association (BAMBA)'),
	'CAMBA' => array('fam'    => 119, 
					 'ind'    => 120, 
					 'region' => 'Midwest', 
					 'name'   => 'Chequamegon Area Mountain Bike Association (CAMBA)'),
	'Cycle-CNY'	=> array(
					 'fam'    => 143, 
					 'ind'    => 144, 
					 'region' => 'Atlantic', 
					 'name'   => 'Cycle-CNY'),
	'ESIMBA'	=> array(
					 'fam'    => 131, 
					 'ind'    => 132, 
					 'region' => 'Atlantic', 
					 'name'   => 'Eastern Shore IMBA (ESIMBA)'),
	'AMBA'	=> array(
					 'fam'    => 153, 
					 'ind'    => 154, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Albuquerque Mountain Bike Association (AMBA)'),
	'HRATS'	=> array(
					 'fam'    => 137, 
					 'ind'    => 138, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Hood River Area Trail Stewards (HRATS)'),
	'KORC'	=> array(
					 'fam'    => 129, 
					 'ind'    => 130, 
					 'region' => 'Midwest', 
					 'name'   => 'Kinnickinnic Off-Road Cyclists (KORC)'),
	'MMBC'	=> array(
					 'fam'    => 139, 
					 'ind'    => 140, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Maui Mountain Bike Coalition (MMBC)'),
	'Metro'	=> array(
					 'fam'    => 155, 
					 'ind'    => 156, 
					 'region' => 'Midwest', 
					 'name'   => 'Metro Mountain Bikers, Milwaukee (Metro)'),
	'NYCMTB'	=> array(
					 'fam'    => 133, 
					 'ind'    => 134, 
					 'region' => 'Atlantic', 
					 'name'   => 'New York City Mountain Bike Association (NYCMTB)'),
	'NAMBA'	=> array(
					 'fam'    => 151, 
					 'ind'    => 152, 
					 'region' => 'Atlantic', 
					 'name'   => 'Northern Allegheny Mountain Bike Association (NAMBA)'),
	'SEPTR'	=> array(
					 'fam'    => 145, 
					 'ind'    => 146, 
					 'region' => 'Atlantic', 
					 'name'   => 'Southeastern Pennsylvania Trail Riders (SEPTR)'),
	'Poto MBA'	=> array(
					 'fam'    => 115, 
					 'ind'    => 116, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Potawatomi Mountain Bike Association (Poto MBA)'),
	'RIMBA'	=> array(
					 'fam'    => 147, 
					 'ind'    => 148, 
					 'region' => 'Atlantic', 
					 'name'   => 'Roanoke IMBA (RIMBA)'),
	'SIMBA'	=> array(
					 'fam'    => 135, 
					 'ind'    => 136, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Southern Idaho Mountain Biking Association (SIMBA)'),
	'SCA'	=> array(
					 'fam'    => 141, 
					 'ind'    => 142, 
					 'region' => 'Midwest', 
					 'name'   => 'Superior Cycling Association (SCA)'),
	'MCMBA'	=> array(
					 'fam'    => 149, 
					 'ind'    => 150, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Motor City Mountain Biking Association (MCMBA)'),
	'DFMBA'	=> array(
					 'fam'    => 183, 
					 'ind'    => 184, 
					 'region' => 'Southwest', 
					 'name'   => 'Desert Foothills Mountain Bike Association (DFMBA)'),
	'CWOCC'	=> array(
					 'fam'    => 169, 
					 'ind'    => 170, 
					 'region' => 'Midwest', 
					 'name'   => 'Central Wisconsin Off-Road Cycling Coalition (CWOCC)'),
	'DMBTA'	=> array(
					 'fam'    => 159, 
					 'ind'    => 160, 
					 'region' => 'Southwest', 
					 'name'   => 'Dixie Mountain Bike Trails Association (DMBTA)'),
	'FATMUG'	=> array(
					 'fam'    => 175, 
					 'ind'    => 176, 
					 'region' => 'Atlantic', 
					 'name'   => 'Fredericksburg Area Trail Management and User Group (FATMUG)'),
	'GMBA'	=> array(
					 'fam'    => 185, 
					 'ind'    => 186, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Grand Mountain Bike Alliance (GMBA)'),
	'JMBA'	=> array(
					 'fam'    => 165, 
					 'ind'    => 166, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Jefferson Mountain Bike Association (JMBA)'),
	'MVMBA'	=> array(
					 'fam'    => 161, 
					 'ind'    => 162, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Miami Valley Mountain Bike Association (MVMBA)'),
	'SMMB'	=> array(
					 'fam'    => 167, 
					 'ind'    => 168, 
					 'region' => 'Atlantic', 
					 'name'   => 'Southern Maryland Mountain Biking (SMMB)'),
	'SWMMBA'	=> array(
					 'fam'    => 179, 
					 'ind'    => 180, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Southwest Michigan Mountain Bike Association (SWMMBA)'),
	'WNYMBA'	=> array(
					 'fam'    => 173, 
					 'ind'    => 174, 
					 'region' => 'Atlantic', 
					 'name'   => 'Western New York Mountain Bicycling Association (WNYMBA)'),
	'GT'	=> array(
					 'fam'    => 181, 
					 'ind'    => 182, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Gallup Trails (GT)'),
	'CORA'	=> array(
					 'fam'    => 163, 
					 'ind'    => 164, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Cincinnati Off-Road Alliance (CORA)'),
	'WBC'	=> array(
					 'fam'    => 177, 
					 'ind'    => 178, 
					 'region' => 'Midwest', 
					 'name'   => 'Woolly Bike Club (WBC)'),
	'SEWTA'	=> array(
					 'fam'    => 171, 
					 'ind'    => 172, 
					 'region' => 'Midwest', 
					 'name'   => 'Southeast Wisconsin Trails Alliance (SEWTA)'),
	'LAMBA'	=> array(
					 'fam'    => 199, 
					 'ind'    => 200, 
					 'region' => 'Midwest', 
					 'name'   => 'Linn Area Mountain Bike Association (LAMBA)'),
	'SHARE'	=> array(
					 'fam'    => 193, 
					 'ind'    => 194, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'SHARE Mountain Bike Club (SHARE)'),
	'Team Dirt'	=> array(
					 'fam'    => 205, 
					 'ind'    => 206, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Team Dirt'),
	'KyMBA Louisville'	=> array(
					 'fam'    => 195, 
					 'ind'    => 196, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Kentucky Mountain Bike Association - Louisville (KyMBA Louisville)'),
	'CIMBA'	=> array(
					 'fam'    => 191, 
					 'ind'    => 192, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Central Idaho Mountain Bike Association (CIMBA)'),
	'TOMMBA'	=> array(
					 'fam'    => 203, 
					 'ind'    => 204, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Top of Michigan Mountain Bike Association (TOMMBA)'),
	'NITRO'	=> array(
					 'fam'    => 197, 
					 'ind'    => 198, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Northeast Indiana Trail Riders Organization (NITRO)'),
	'RBRTC'	=> array(
					 'fam'    => 201, 
					 'ind'    => 202, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Rust Belt Revival Trail Coalition (RBRTC)'),
	'PMBA'	=> array(
					 'fam'    => 58, 
					 'ind'    => 59, 
					 'region' => 'Southwest', 
					 'name'   => 'Prescott Mountain Bike Alliance (PMBA)'),
	'AOA'	=> array(
					 'fam'    => 208, 
					 'ind'    => 208, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Appalachia Outdoor Adventurers (AOA)'),
	'BAMBA-PA'	=> array(
					 'fam'    => 210, 
					 'ind'    => 210, 
					 'region' => 'Atlantic', 
					 'name'   => 'Berks Area Mountain Biking Association (BAMBA)'),
	'CCCMB'	=> array(
					 'fam'    => 209, 
					 'ind'    => 209, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Central Coast Concerned Mountain Bikers (CCCMB)'),
	'IDYLLWILD'	=> array(
					 'fam'    => 211, 
					 'ind'    => 211, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Idyllwild Cycling'),
	'SKYMBA'	=> array(
					 'fam'    => 212, 
					 'ind'    => 212, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Southwest Kentucky Mountain Bike Association (SKyMBA)'),
	'SAMBA'	=> array(
					 'fam'    => 218, 
					 'ind'    => 218, 
					 'region' => 'Atlantic', 
					 'name'   => 'Susquehanna Area Mountain Bike Association (SAMBA)'),
	'NIMBA'	=> array(
					 'fam'    => 215, 
					 'ind'    => 215, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Northern Indiana Mountain Bike Association (NIMBA)'),
	'MEMBA'	=> array(
					 'fam'    => 216, 
					 'ind'    => 216, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Michigan&#039;s Edge Mountain Biking Association (MEMBA)'),
	'SDMB'	=> array(
					 'fam'    => 219, 
					 'ind'    => 219, 
					 'region' => 'Southwest', 
					 'name'   => 'Sonoran Desert Mountain Bicyclists (SDMB)'),
	'CAMBA-OH'	=> array(
					 'fam'    => 220, 
					 'ind'    => 220, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Cleveland Area Mountain Bike Association (CAMBA)'),
	'RCR'	=> array(
					 'fam'    => 217, 
					 'ind'    => 217, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Routt County Riders (RCR)'),
	'MSMBA'	=> array(
					 'fam'    => 213, 
					 'ind'    => 213, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Mount Shasta Mountain Bike Association (MSMBA)'),
	'GRIMBA'	=> array(
					 'fam'    => 227, 
					 'ind'    => 227, 
					 'region' => 'Midwest', 
					 'name'   => 'Grand Rapids and Itasca Mountain Bicycling Association (GRIMBA)'),
	'CLMTBC'	=> array(
					 'fam'    => 226, 
					 'ind'    => 226, 
					 'region' => 'Midwest', 
					 'name'   => 'Cuyuna Lakes Mountain Bike Crew (CLMTBC)'),
	'NRBU'	=> array(
					 'fam'    => 225, 
					 'ind'    => 225, 
					 'region' => 'Atlantic', 
					 'name'   => 'New River Bicycle Union (NRBU)'),
	'SFTS'	=> array(
					 'fam'    => 230, 
					 'ind'    => 230, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Summit Fat Tire Society (SFTS)'),
	'RAMBO-MN'	=> array(
					 'fam'    => 228, 
					 'ind'    => 228, 
					 'region' => 'Midwest', 
					 'name'   => 'Red Wing Area Mountain Bike Organization (RAMBO)'),
	'NEWT'	=> array(
					 'fam'    => 231, 
					 'ind'    => 231, 
					 'region' => 'Great Lakes', 
					 'name'   => 'North East Wisconsin Trails (NEWT)'),
	'FTR'	=> array(
					 'fam'    => 235, 
					 'ind'    => 235, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Fidalgo Trail Riders (FTR)'),
	'FCBC'	=> array(
					 'fam'    => 233, 
					 'ind'    => 233, 
					 'region' => 'Atlantic', 
					 'name'   => 'Fats In The Cats (FCBC)'),
	'CILTA'	=> array(
					 'fam'    => 234, 
					 'ind'    => 234, 
					 'region' => 'Midwest', 
					 'name'   => 'Central Illinois Trails Association (CILTA)'),
	'SDMBA'	=> array(
					 'fam'    => 232, 
					 'ind'    => 232, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'San Diego Mountain Biking Association (SDMBA)'),
	'CORBA-WI'	=> array(
					 'fam'    => 229, 
					 'ind'    => 229, 
					 'region' => 'Midwest', 
					 'name'   => 'Chippewa Off Road Bike Association (CORBA)'),
	'CAMBr'	=> array(
					 'fam'    => 214, 
					 'ind'    => 214, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Chicago Area Mountain Bikers (CAMBr)'),
	'CCW'	=> array(
					 'fam'    => 236, 
					 'ind'    => 236, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Cloud City Wheelers (CCW)'),
	'DNMA'	=> array(
					 'fam'    => 237, 
					 'ind'    => 237, 
					 'region' => 'Southwest', 
					 'name'   => 'Del Norte MtB Alliance (DNMA)'),
	'GTH'	=> array(
					 'fam'    => 238, 
					 'ind'    => 238, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Groveland Trail Heads (GTH)'),
	'MORE'	=> array(
					 'fam'    => 239, 
					 'ind'    => 239, 
					 'region' => 'Atlantic', 
					 'name'   => 'Mid-Atlantic Off-Road Enthusiasts (MORE)'),
	'CRATA'	=> array(
					 'fam'    => 244, 
					 'ind'    => 244, 
					 'region' => 'Southwest', 
					 'name'   => 'Colorado River Area Trail Alliance (CRATA)'),
	'MBT'	=> array(
					 'fam'    => 240, 
					 'ind'    => 240, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Mountain Bike the Tetons (MBT)'),
	'PT'	=> array(
					 'fam'    => 241, 
					 'ind'    => 241, 
					 'region' => 'Atlantic', 
					 'name'   => 'Pocahontas Trails (PT)'),
	'RA-MORE'	=> array(
					 'fam'    => 242, 
					 'ind'    => 242, 
					 'region' => 'Atlantic', 
					 'name'   => 'RVA MORE'),
	'WAMB'	=> array(
					 'fam'    => 243, 
					 'ind'    => 243, 
					 'region' => 'Midwest', 
					 'name'   => 'Winona Area Mountain Bikers (WAMB)'),
	'FATRAC'	=> array(
					 'fam'    => 245, 
					 'ind'    => 245, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Folsom Auburn Trail Riders Action Coalition (FATRAC)'),
	'MMBA'	=> array(
					 'fam'    => 246, 
					 'ind'    => 246, 
					 'region' => 'Southwest', 
					 'name'   => 'Moab Mountain Bike Association (MMBA)'),
	'MBoSC'	=> array(
					 'fam'    => 247, 
					 'ind'    => 247, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Mountain Bikers of Santa Cruz (MBoSC)'),
	'BMSTC'	=> array(
					 'fam'    => 248, 
					 'ind'    => 248, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Blue Mountain Singletrack Trails Club (BMSTC)'),
	'SATA'	=> array(
					 'fam'    => 249, 
					 'ind'    => 249, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Salem Area Trail Alliance (SATA)'),
	'SVMTB'	=> array(
					 'fam'    => 250, 
					 'ind'    => 250, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Silicon Valley Mountain Bikers (SVMTB)'),
	'OMTBO'	=> array(
					 'fam'    => 251, 
					 'ind'    => 251, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Oahu Mountain Bike Ohana (OMTBO)'),
	'BMBA'	=> array(
					 'fam'    => 265, 
					 'ind'    => 265, 
					 'region' => 'Southwest', 
					 'name'   => 'Borderland Mountain Bike Association (BMBA)'),
	'RFMBA'	=> array(
					 'fam'    => 266, 
					 'ind'    => 266, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Roaring Fork Mountain Bike Association (RFMBA)'),
	'OORC'	=> array(
					 'fam'    => 267, 
					 'ind'    => 267, 
					 'region' => 'South Central', 
					 'name'   => 'Ozark Off Road Cyclists (OORC)'),
	'AMP'	=> array(
					 'fam'    => 268, 
					 'ind'    => 268, 
					 'region' => 'Atlantic', 
					 'name'   => 'Anthracite Mountain Pedalers (AMP)'),
	'LCTC'	=> array(
					 'fam'    => 269, 
					 'ind'    => 269, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Lake County Trails Coalition (LCTC)'),
	'GROC'	=> array(
					 'fam'    => 270, 
					 'ind'    => 270, 
					 'region' => 'Atlantic', 
					 'name'   => 'Genesee Regional Off-Road Cyclists (GROC)'),
	'CCORC'	=> array(
					 'fam'    => 271, 
					 'ind'    => 271, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Central California Off Road Cyclists (CCORC)'),
	'GLOC'	=> array(
					 'fam'    => 272, 
					 'ind'    => 272, 
					 'region' => 'Atlantic', 
					 'name'   => 'Greater Lynchburg Off-Road Cyclists (GLOC)'),
	'MWTA'	=> array(
					 'fam'    => 273, 
					 'ind'    => 273, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Medicine Wheel Trail Advocates (MWTA)'),
	'CAMBA-NY'	=> array(
					 'fam'    => 274, 
					 'ind'    => 274, 
					 'region' => 'Atlantic', 
					 'name'   => 'Central Adirondack Mountain Bike Association (CAMBA)'),
	'MORC-MO'	=> array(
					 'fam'    => 275, 
					 'ind'    => 275, 
					 'region' => 'South Central', 
					 'name'   => 'Midwest Off Road Cyclists (MORC)'),
	'BEMBA'	=> array(
					 'fam'    => 276, 
					 'ind'    => 276, 
					 'region' => 'Atlantic', 
					 'name'   => 'Bald Eagle Mountain Bike Association (BEMBA)'),
	'CATA'	=> array(
					 'fam'    => 277, 
					 'ind'    => 277, 
					 'region' => 'South Central', 
					 'name'   => 'Central Arkansas Trail Alliance (CATA)'),
	'BBC'	=> array(
					 'fam'    => 289, 
					 'ind'    => 289, 
					 'region' => 'Pacific Northwest', 
					 'name'   => 'Bitterroot Backcountry Cyclists (BBC)'),
	'BONC'	=> array(
					 'fam'    => 290, 
					 'ind'    => 290, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Bicyclists of Nevada County (BONC)'),
	'COMBO'	=> array(
					 'fam'    => 291, 
					 'ind'    => 291, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Central Ohio Mountain Biking Organization (COMBO)'),
	'EMBA'	=> array(
					 'fam'    => 292, 
					 'ind'    => 292, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Evansville Mountain Bike Association (EMBA)'),
	'IROC'	=> array(
					 'fam'    => 293, 
					 'ind'    => 293, 
					 'region' => 'Midwest', 
					 'name'   => 'Iron Range Off-Road Cyclists (IROC)'),
	'RCMBA'	=> array(
					 'fam'    => 294, 
					 'ind'    => 294, 
					 'region' => 'California-Hawaii', 
					 'name'   => 'Redwood Coast Mountain Bike Association (RCMBA)'),
	'RAMBA'	=> array(
					 'fam'    => 295, 
					 'ind'    => 295, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Range Area Mountain Bike Association (RAMBA)'),
	'RAMBO'	=> array(
					 'fam'    => 297, 
					 'ind'    => 297, 
					 'region' => 'Southeast', 
					 'name'   => 'Roswell Alpharetta Mountain Bike Organization (RAMBO)'),
  	'CROCT'	=> array(
					 'fam'    => 298,
					 'ind'    => 298,
					 'region' => 'Midwest',
					 'name'   => 'Cannon River Offroad Cycling and Trails (CROCT)'),
	'SSS'	=> array(
					 'fam'    => 299,
					 'ind'    => 299,
					 'region' => 'Colorado-Wyoming',
					 'name'   => 'Silverton Singletrack Society (SSS)'),
	'PU'	=> array(
					 'fam'    => 300,
					 'ind'    => 300,
					 'region' => 'Pacific Northwest',
					 'name'   => 'Pedal United (PU)'),
	'FAST'	=> array(
					 'fam'    => 302,
					 'ind'    => 302,
					 'region' => 'South Central',
					 'name'   => 'Friends of Arkansas Singletrack (FAST)'),
	'BMCC'	=> array(
					 'fam'    => 303,
					 'ind'    => 303,
					 'region' => 'Colorado-Wyoming',
					 'name'   => 'Bomber Mountain Cycling Club (BMCC)'),
	'OEF'	=> array(
					 'fam'    => 304,
					 'ind'    => 304,
					 'region' => 'South Central',
					 'name'   => 'Oklahoma Earthbike Fellowship (OEF)'),
	'SVVC'	=> array(
					 'fam'    => 305,
					 'ind'    => 305,
					 'region' => 'Atlantic',
					 'name'   => 'Susquehanna Valley Velo Club (SVVC)'),
	'BMA'	=> array(
					 'fam'    => 307,
					 'ind'    => 307,
					 'region' => 'Colorado-Wyoming',
					 'name'   => 'Boulder Mountainbike Alliance (BMA)'),
	'SMBA'	=> array(
					 'fam'    => 308,
					 'ind'    => 308,
					 'region' => 'Colorado-Wyoming',
					 'name'   => 'San Miguel Bike Alliance (SMBA)'),
	'MAMB'	=> array(
					 'fam'    => 309,
					 'ind'    => 309,
					 'region' => 'Midwest',
					 'name'   => 'Mankato Area Mountain Bikers (MAMB)'),
	'NMTA-ME'	=> array(
					 'fam'    => 311,
					 'ind'    => 311,
					 'region' => 'Atlantic',
					 'name'   => 'Northern Maine Trails Alliance (NMTA)'),
	'SABA'	=> array(
					 'fam'    => 312,
					 'ind'    => 312,
					 'region' => 'California-Hawaii',
					 'name'   => 'Susanville Area Bicycle Association (SABA)'),
	'VVCC'	=> array(
					 'fam'    => 313,
					 'ind'    => 313,
					 'region' => 'Southwest',
					 'name'   => 'Verde Valley Cyclists Coalition (VVCC)'),
	'IVMTB'	=> array(
					 'fam'    => 314,
					 'ind'    => 314,
					 'region' => 'California-Hawaii',
					 'name'   => 'Inland Valley Mountain Bike Association (IVMTB)'),
	'THOR'	=> array(
					 'fam'    => 315,
					 'ind'    => 315,
					 'region' => 'South Central',
					 'name'   => 'Trails Have Our Respect (THOR)'),
	'BBA'	=> array(
					 'fam'    => 317,
					 'ind'    => 317,
					 'region' => 'Atlantic',
					 'name'   => 'Blackwater Bicycle Association (BBA)'),
	'CWTA'	=> array(
					 'fam'    => 318,
					 'ind'    => 318,
					 'region' => 'Colorado-Wyoming',
					 'name'   => 'Central Wyoming Trails Alliance (CWTA)'),
	'GEARS'	=> array(
					 'fam'    => 319,
					 'ind'    => 319,
					 'region' => 'Midwest',
					 'name'   => 'GEARS United'),
	'KSS'	=> array(
					 'fam'    => 320,
					 'ind'    => 320,
					 'region' => 'South Central',
					 'name'   => 'Kansas Singletrack Society (KSS)'),
	'LOCO'	=> array(
					 'fam'    => 321,
					 'ind'    => 321,
					 'region' => 'South Central',
					 'name'   => 'Louisiana Offroad Cycling Organization (LOCO)'),
	'NOMAMBO'	=> array(
					 'fam'    => 322,
					 'ind'    => 322,
					 'region' => 'South Central',
					 'name'   => 'New Orleans Metro Area Mountain Bike Organization (NOMAMBO)'),
	'SVMBA'	=> array(
					 'fam'    => 323,
					 'ind'    => 323,
					 'region' => 'Atlantic',
					 'name'   => 'Southern Virginia Mountain Bike Association (SVMBA)'),
	'TP'	=> array(
					 'fam'    => 324,
					 'ind'    => 324,
					 'region' => 'Atlantic',
					 'name'   => 'Trail Pittsburgh'),
	'NWNC-MTBA'	=> array(
					 'fam'    => 325,
					 'ind'    => 325,
					 'region' => 'Southeast',
					 'name'   => 'Northwest North Carolina Mountain Bike Alliance (NWNC-MTBA)'),
	'ARR'	=> array(
					 'fam'    => 326,
					 'ind'    => 326,
					 'region' => 'South Central',
					 'name'   => 'Austin Ridge Riders Mountain Bike Club (ARR)'),
	'KMR'	=> array(
					 'fam'    => 327,
					 'ind'    => 327,
					 'region' => 'Pacific Northwest',
					 'name'   => 'Kootenai Mountain Riders (KMR)'),
	'VMB'	=> array(
					 'fam'    => 328,
					 'ind'    => 328,
					 'region' => 'Atlantic',
					 'name'   => 'Valley Mountain Bikers (VMB)'),
	'ETXTA'	=> array(
					 'fam'    => 329,
					 'ind'    => 329,
					 'region' => 'South Central',
					 'name'   => 'East Texas Trail Advocacy (ETXTA)'),
	'CNY-DIRT'	=> array(
					 'fam'    => 330,
					 'ind'    => 330,
					 'region' => 'Atlantic',
					 'name'   => 'CNY DIRT'),
	'NUMB'	=> array(
					 'fam'    => 331,
					 'ind'    => 331,
					 'region' => 'Southwest',
					 'name'   => 'Northeastern Utah Mountain Bikers (NUMB)'),
	'MTBM'	=> array(
					 'fam'    => 332,
					 'ind'    => 332,
					 'region' => 'Pacific Northwest',
					 'name'   => 'MTB Missoula (MTBM)'),
	'PMTB'	=> array(
					 'fam'    => 333,
					 'ind'    => 333,
					 'region' => 'Atlantic',
					 'name'   => 'Palisades MTB (PMTB)'),
	'L49'	=> array(
					 'fam'    => 337,
					 'ind'    => 337,
					 'region' => 'Alaska',
					 'name'   => 'Levitation 49 (L49)'),
	'WVTA'	=> array(
					 'fam'    => 338,
					 'ind'    => 338,
					 'region' => 'Southwest',
					 'name'   => 'West Valley Trail Alliance (WVTA)'),
	'SEMBA'	=> array(
					 'fam'    => 339,
					 'ind'    => 339,
					 'region' => 'California-Hawaii',
					 'name'   => 'Sierra Eastside Mountain Bike Association (SEMBA)'),
	'WMBC'	=> array(
					 'fam'    => 340,
					 'ind'    => 340,
					 'region' => 'South Central',
					 'name'   => 'Weatherford Mountain Bike Club (WMBC)'),
	'Upstate SORBA'	=> array(
					 'fam'    => 341,
					 'ind'    => 341,
					 'region' => 'Southeast',
					 'name'   => 'Upstate SORBA'),
	'SAMBA'	=> array(
					 'fam'    => 218,
					 'ind'    => 218,
					 'region' => 'Southeast',
					 'name'   => 'South Alabama Mountain Bike Association (SAMBA)'),
	'Tarheel Trailblazers'	=> array(
					 'fam'    => 342,
					 'ind'    => 342,
					 'region' => 'Southeast',
					 'name'   => 'Tarheel Trailblazers'),
	'TMBA'	=> array(
					 'fam'    => 343,
					 'ind'    => 343,
					 'region' => 'Southeast',
					 'name'   => 'Tallahassee Mountain Bike Association (TMBA)'),
	'BUMP'	=> array(
					 'fam'    => 344,
					 'ind'    => 344,
					 'region' => 'Southeast',
					 'name'   => 'Birmingham Urban Mountain Pedalers (BUMP)'),
	'GFTS'	=> array(
					 'fam'    => 345,
					 'ind'    => 345,
					 'region' => 'Southeast',
					 'name'   => 'Greensboro Fat Tire Society (GFTS)'),
	'SORBA Tri-Cities'	=> array(
					 'fam'    => 346,
					 'ind'    => 346,
					 'region' => 'Southeast',
					 'name'   => 'SORBA Tri-Cities'),
	'TORC'	=> array(
					 'fam'    => 347,
					 'ind'    => 347,
					 'region' => 'Southeast',
					 'name'   => 'Triangle Off-Road Cyclists (TORC)'),
	'EMBA SORBA'	=> array(
					 'fam'    => 350,
					 'ind'    => 350,
					 'region' => 'Southeast',
					 'name'   => 'Ellijay Mountain Bike Association (EMBA SORBA)'),
	'SORBA Athens'	=> array(
					 'fam'    => 351,
					 'ind'    => 351,
					 'region' => 'Southeast',
					 'name'   => 'SORBA Athens'),
	'Northwest Georgia SORBA'	=> array(
					 'fam'    => 352,
					 'ind'    => 352,
					 'region' => 'Southeast',
					 'name'   => 'Northwest Georgia SORBA'),
	'SORBA Atlanta'	=> array(
					 'fam'    => 353,
					 'ind'    => 353,
					 'region' => 'Southeast',
					 'name'   => 'SORBA Atlanta'),
	'OMBA Middle Georgia'	=> array(
					 'fam'    => 354,
					 'ind'    => 354,
					 'region' => 'Southeast',
					 'name'   => 'Ocmulgee Mountain Biking Association (OMBA Middle Georgia)'),
	'CSRA'	=> array(
					 'fam'    => 355,
					 'ind'    => 355,
					 'region' => 'Southeast',
					 'name'   => 'Augusta-GA and Aiken-SC (CSRA)'),
	'SORBA Middle Tennessee'	=> array(
					 'fam'    => 356,
					 'ind'    => 356,
					 'region' => 'Southeast',
					 'name'   => 'SORBA Middle Tennessee'),
	'SORBA Huntsville'	=> array(
					 'fam'    => 357,
					 'ind'    => 357,
					 'region' => 'Southeast',
					 'name'   => 'SORBA Huntsville'),
	'SORBA Woodstock'	=> array(
					 'fam'    => 358,
					 'ind'    => 358,
					 'region' => 'Southeast',
					 'name'   => 'SORBA Woodstock'),
	'CVA'	=> array(
					 'fam'    => 359,
					 'ind'    => 359,
					 'region' => 'Southeast',
					 'name'   => 'Chattahoochee Valley Area SORBA (CVA)'),
	'CASA'	=> array(
					 'fam'    => 360,
					 'ind'    => 360,
					 'region' => 'Southeast',
					 'name'   => 'SORBA Chattanooga (CASA)'),
	'SORBA West Georgia'	=> array(
					 'fam'    => 361,
					 'ind'    => 361,
					 'region' => 'Southeast',
					 'name'   => 'SORBA West Georgia'),
	'GATR'	=> array(
					 'fam'    => 362,
					 'ind'    => 362,
					 'region' => 'Southeast',
					 'name'   => 'Gwinnett Area Trail Riders (GATR)'),
	'AMBC SORBA'	=> array(
					 'fam'    => 363,
					 'ind'    => 363,
					 'region' => 'Southeast',
					 'name'   => 'Appalachian Mountain Bike Club (AMBC SORBA)'),
	'Cape Fear SORBA'	=> array(
					 'fam'    => 364,
					 'ind'    => 364,
					 'region' => 'Southeast',
					 'name'   => 'Cape Fear SORBA'),
	'WAMBA'	=> array(
					 'fam'    => 365,
					 'ind'    => 365,
					 'region' => 'Southeast',
					 'name'   => 'West Alabama Mountain Biking Association (WAMBA)'),
	'NEABA'	=> array(
					 'fam'    => 366,
					 'ind'    => 366,
					 'region' => 'Southeast',
					 'name'   => 'Northeast Alabama Bicycle Association (NEABA)'),
	'SORBA Jax'	=> array(
					 'fam'    => 367,
					 'ind'    => 367,
					 'region' => 'Southeast',
					 'name'   => 'SORBA Jax'),
	'Midlands SORBA'	=> array(
					 'fam'    => 368,
					 'ind'    => 368,
					 'region' => 'Southeast',
					 'name'   => 'Midlands SORBA'),
	'Flagler Area Biking SORBA'	=> array(
					 'fam'    => 369,
					 'ind'    => 369,
					 'region' => 'Southeast',
					 'name'   => 'Flagler Area Biking SORBA'),
	'CAMP'	=> array(
					 'fam'    => 370,
					 'ind'    => 370,
					 'region' => 'Southeast',
					 'name'   => 'Central Alabama Mountain Pedalers (CAMP)'),
	'SORBA Orlando'	=> array(
					 'fam'    => 371,
					 'ind'    => 371,
					 'region' => 'Southeast',
					 'name'   => 'SORBA Orlando'),
	'SEGA SORBA'	=> array(
					 'fam'    => 372,
					 'ind'    => 372,
					 'region' => 'Southeast',
					 'name'   => 'Southeast Georgia SORBA (SEGA SORBA)'),
	'NAS'	=> array(
					 'fam'    => 373,
					 'ind'    => 373,
					 'region' => 'Southeast',
					 'name'   => 'Nantahala Area SORBA (NAS)'),
	'FRMBA'	=> array(
					 'fam'    => 374,
					 'ind'    => 374,
					 'region' => 'Southeast',
					 'name'   => 'Flint River Mountain Bike Association (FRMBA)'),
	'NMTA'	=> array(
					 'fam'    => 375,
					 'ind'    => 375,
					 'region' => 'Southeast',
					 'name'   => 'North Mississippi Trail Alliance (NMTA)'),
	'SAM-SORBA'	=> array(
					 'fam'    => 376,
					 'ind'    => 376,
					 'region' => 'Southeast',
					 'name'   => 'Southeast Alabama Mountainbikers (SAM-SORBA)'),
	'Northeast Georgia SORBA'	=> array(
					 'fam'    => 377,
					 'ind'    => 377,
					 'region' => 'Southeast',
					 'name'   => 'Northeast Georgia SORBA'),
	'FMC'	=> array(
					 'fam'    => 382,
					 'ind'    => 382,
					 'region' => 'Southeast',
					 'name'   => 'Florida Mudcutters (FMC)'),
	'PAS'	=> array(
					 'fam'    => 383,
					 'ind'    => 383,
					 'region' => 'Southeast',
					 'name'   => 'Pisgah Area SORBA (PAS)'),
	'TCMBA'	=> array(
					 'fam'    => 384,
					 'ind'    => 384,
					 'region' => 'Southeast',
					 'name'   => 'Tri-County Mountain Bike Association (TCMBA)'),
);

foreach ($url as $key => $value) {
	if ($url[$key]['region'] == "SORBA") {
		$url[$key]['fam'] = $contribute_url . $url[$key]['fam'] . "&custom_76=" . $url[$key]['region'] . "&custom_77=" . $url[$key]['name'] . $get_string;
		$url[$key]['ind'] = $contribute_url . $url[$key]['ind'] . "&custom_76=" . $url[$key]['region'] . "&custom_77=" . $url[$key]['name'] . $get_string;
	} else {
		$url[$key]['fam'] = $contribute_url . $url[$key]['fam'] . $get_string;
		$url[$key]['ind'] = $contribute_url . $url[$key]['ind'] . $get_string;
	}
}

// Canada
$canada_down_url = 'http://www.imbacanada.com/membership/';

// states
$state_list = array('AL'=>"Alabama",  			
					'AK'=>"Alaska",  	
					'AZ'=>"Arizona",  	
					'AR'=>"Arkansas",  	
					'CA'=>"California",  	
					'CO'=>"Colorado",  	
					'CT'=>"Connecticut",  	
					'DE'=>"Delaware",  	
					'DC'=>"District Of Columbia",  	
					'FL'=>"Florida",  	
					'GA'=>"Georgia",  	
					'HI'=>"Hawaii",  	
					'ID'=>"Idaho",  	
					'IL'=>"Illinois",  	
					'IN'=>"Indiana",  	
					'IA'=>"Iowa",  
					'KS'=>"Kansas",  
					'KY'=>"Kentucky",  
					'LA'=>"Louisiana",  
					'ME'=>"Maine",  
					'MD'=>"Maryland",  
					'MA'=>"Massachusetts",  
					'MI'=>"Michigan",  
					'MN'=>"Minnesota",  
					'MS'=>"Mississippi",  
					'MO'=>"Missouri",  
					'MT'=>"Montana",
					'NE'=>"Nebraska",
					'NV'=>"Nevada",
					'NH'=>"New Hampshire",
					'NJ'=>"New Jersey",
					'NM'=>"New Mexico",
					'NY'=>"New York",
					'NC'=>"North Carolina",
					'ND'=>"North Dakota",
					'OH'=>"Ohio",  
					'OK'=>"Oklahoma",  
					'OR'=>"Oregon",  
					'PA'=>"Pennsylvania",  
					'RI'=>"Rhode Island",  
					'SC'=>"South Carolina",  
					'SD'=>"South Dakota",
					'TN'=>"Tennessee",  
					'TX'=>"Texas",  
					'UT'=>"Utah",  
					'VT'=>"Vermont",  
					'VA'=>"Virginia",  
					'WA'=>"Washington",  
					'WV'=>"West Virginia",  
					'WI'=>"Wisconsin",  
					'WY'=>"Wyoming");
?>
<script type='text/javascript' src='/sites/all/themes/longride/js/cascading-dropdowns.js'>
</script>

<div style="background: url('https://www.imba.com/sites/default/files/civicrm/persist/contribute/image/af2014_body_bg.jpg');margin:0px;padding:0px;">
  <div><img src="https://www.imba.com/sites/default/files/SpringMemberDrive_hdr1.jpg" alt="Be A Link In The Chain" title="Be A Link In The Chain" style="max-width:100%;margin:0px;padding:0px;" /></div>
  <div style="padding:7px 17px;">
    <h1 style="font-family:'ConduitITCMediumRegular'; font-size: 34px; text-transform: uppercase; font-weight: normal; line-height: 40px;">If you love mountain biking, you belong with IMBA. </h1>
     <p style="font-size: 1.2em; line-height: 1.4em;">The International Mountain Bicycling Association (IMBA) believes access to sustainable mountain bike trails is critical to recreation and land conservation. Every day, we work to educate trail users for a strong future, because without stewards and advocates of the trails, mountain bike experiences will be limited or lost.</p>
<p style="font-size: 1.2em; line-height: 1.4em;">Joining your local IMBA chapter is the most effective way for you to build and maintain the amazing trails you love to ride. Your membership dues support your local chapter's work, and IMBA's efforts nationwide. Join with thousands of other riders who are passionate enough to support the trails they ride on.</p><p style="font-size: 1.2em; line-height: 1.4em;">If you need more info on <strong><a href="https://www.imba.com/near-you" title="IMBA-US Chapters" target="_blank">what chapter is near you check out this map</a></strong>.</p>
    <div style="text-align: center;">
      <div style="background-color: #8f0002; color: #ffffff; padding: 17px; margin: 0 auto; width: 760px; text-align: left;">
        <h2 style="font-family:'ConduitITCMediumRegular'; font-size: 36px; text-transform: uppercase; font-weight: normal; line-height: 56px; margin: 0px;"><img src="https://www.imba.com/sites/default/files/trail-love-logo-black-trans.png" alt="Trail Love" title="Trail Love" width="200" height="201" style="float: left; margin-right: 25px;" />Choose Your Membership:</h2>
        <div style="float: left;">
          <table border="0" cellspacing="0" cellpadding="7" style="color: #FFFFFF;">
            <tbody>
              <tr>
                <td><label for="country"><strong>I live in </strong></label></td>
                <td><select name="country" id="country">
                    <option value="99">Please Select</option>
            ;
                    <option value="0">the US</option>
                    <option value="<?=$canada_down_url ?>">Canada</option>
                    <option value="1">another country</option>
                  </select></td>
              </tr>
              <tr>
                <td><label for="state2"><strong>I am a </strong></label></td>
                <td><select name="type" id="type">
            <!-- US > Type? -->
                    <option class="0" value="99">Please Select</option>
            ;
                    <option class="0" value="0">Individual or Family</option>
                    <option class="0" value="88">Retailer</option>
                    <option class="0" value="<?=$club_url?>">Club/Organization</option>
                    <option class="0" value="<?=$corp_url?>">Corporate Sponsor</option>
                    <option class="0" value="<?=$patroller_url?>">NMBP Patroller</option>
            <!-- International > Type? -->
                    <option class="1" value="99">Please Select</option>
            ;
                    <option class="1" value="<?=$imba_ind_url?>">Individual or Family</option>
                    <option class="1" value="<?=$retail_url?>">Retailer</option>
                    <option class="1" value="<?=$club_url?>">Club/Organization</option>
                    <option class="1" value="<?=$corp_url?>">Corporate Sponsor</option>
                  </select></td>
              </tr>
              <tr>
                <td><label for="state3"><strong>My state or territory is </strong></label></td>
                <td><select name="state" id="state">
                    <option class="0" value="99">Please Select</option>
                    <?
	// US > Individual > State?
	foreach ($state_list as $key => $value) {
		switch ($key) {
			case 'AL':
				$jump_url = 12;
				break;
			case 'CA':
				$jump_url = 16;
				break;
			case 'CO':
				$jump_url = 14;
				break;
			case 'FL':
				$jump_url = 18;
				break;
			case 'NC':
				$jump_url = 20;
				break;
			case 'GA':
				$jump_url = 22;
				break;
			case 'TN':
				$jump_url = 0;
				break;
			case 'MN':
				$jump_url = 2;
				break;
			case 'DE':
				$jump_url = 4;
				break;
			case 'OR':
				$jump_url = 6;
				break;
			case 'WA':
				$jump_url = 8;
				break;
			case 'SC':
				$jump_url = 24;
				break;
			case 'VA':
				$jump_url = 26;
				break;
			case 'IA':
				$jump_url = 28;
				break;
			case 'AZ':
				$jump_url = 30;
				break;
			case 'MI':
				$jump_url = 32;
				break;
			case 'NM':
				$jump_url = 34;
				break;
			case 'WI':
				$jump_url = 36;
				break;
			case 'IN':
				$jump_url = 38;
				break;
			case 'NV':
				$jump_url = 40;
				break;
			case 'ID':
				$jump_url = 42;
				break;
			case 'NY':
				$jump_url = 44;
				break;
			case 'MD':
				$jump_url = 46;
				break;
			case 'HI':
				$jump_url = 48;
				break;
			case 'PA':
				$jump_url = 50;
				break;
			case 'UT':
				$jump_url = 52;
				break;
			case 'OH':
				$jump_url = 54;
				break;
			case 'KY':
				$jump_url = 56;
				break;
			case 'WV':
				$jump_url = 58;
				break;
			case 'IL':
				$jump_url = 60;
				break;
			case 'WY':
				$jump_url = 62;
				break;
			case 'DC':
				$jump_url = 64;
				break;
			case 'AR':
				$jump_url = 66;
				break;
			case 'TX':
				$jump_url = 68;
				break;
			case 'MO':
				$jump_url = 70;
				break;
			case 'MT':
				$jump_url = 72;
				break;
			case 'OK':
				$jump_url = 74;
				break;
			case 'NE':
				$jump_url = 76;
				break;
			case 'MS':
				$jump_url = 78;
				break;
			case 'ME':
				$jump_url = 80;
				break;
			case 'LA':
				$jump_url = 82;
				break;
			case 'KS':
				$jump_url = 84;
				break;
			case 'NJ':
				$jump_url = 86;
				break;
			case 'AK':
				$jump_url = 88;
				break;
			default:
				$jump_url = $imba_ind_url;
		}
		print "\t" . '<option class="0" value="' . $jump_url . '"' . '>' . $value . '</option>' . "\n";
	}
	?>
                    <option class="88" value="99">Please Select</option>
                    <?
	// US > Individual > State?
	foreach ($state_list as $key => $value) {
		switch ($key) {
			case 'AL':
				$jump_url = 13;
				break;
			case 'CA':
				$jump_url = 17;
				break;
			case 'CO':
				$jump_url = 15;
				break;
			case 'FL':
				$jump_url = 19;
				break;
			case 'NC':
				$jump_url = 21;
				break;
			case 'GA':
				$jump_url = 23;
				break;
			case 'TN':
				$jump_url = 90;
				break;
			case 'MN':
				$jump_url = 3;
				break;
			case 'DE':
				$jump_url = 5;
				break;
			case 'OR':
				$jump_url = 7;
				break;
			case 'WA':
				$jump_url = 9;
				break;
			case 'SC':
				$jump_url = 25;
				break;
			case 'VA':
				$jump_url = 27;
				break;
			case 'IA':
				$jump_url = 29;
				break;
			case 'AZ':
				$jump_url = 31;
				break;
			case 'MI':
				$jump_url = 33;
				break;
			case 'NM':
				$jump_url = 35;
				break;
			case 'WI':
				$jump_url = 37;
				break;
			case 'IN':
				$jump_url = 39;
				break;
			case 'NV':
				$jump_url = 41;
				break;
			case 'ID':
				$jump_url = 43;
				break;
			case 'NY':
				$jump_url = 45;
				break;
			case 'MD':
				$jump_url = 47;
				break;
			case 'HI':
				$jump_url = 49;
				break;
			case 'PA':
				$jump_url = 51;
				break;
			case 'UT':
				$jump_url = 53;
				break;
			case 'OH':
				$jump_url = 55;
				break;
			case 'KY':
				$jump_url = 57;
				break;
			case 'WV':
				$jump_url = 59;
				break;
			case 'IL':
				$jump_url = 61;
				break;
			case 'WY':
				$jump_url = 63;
				break;
			case 'DC':
				$jump_url = 65;
				break;
			case 'AR':
				$jump_url = 67;
				break;
			case 'TX':
				$jump_url = 69;
				break;
			case 'MO':
				$jump_url = 71;
				break;
			case 'MT':
				$jump_url = 73;
				break;
			case 'OK':
				$jump_url = 75;
				break;
			case 'NE':
				$jump_url = 77;
				break;
			case 'MS':
				$jump_url = 79;
				break;
			case 'ME':
				$jump_url = 81;
				break;
			case 'LA':
				$jump_url = 83;
				break;
			case 'KS':
				$jump_url = 85;
				break;
			case 'NJ':
				$jump_url = 87;
				break;
			case 'AK':
				$jump_url = 89;
				break;
			default:
				$jump_url = $retail_url;
		}
		print "\t" . '<option class="88" value="' . $jump_url . '"' . '>' . $value . '</option>' . "\n";
	}
	?>
                  </select></td>
              </tr>
              <tr>
                <td><label for="chapter2"><strong>My local Chapter is </strong></label></td>
                <td><select name="chapter" id="chapter">
            <!-- Alabama -->
                <option class="12" value="99">Please Select</option>
                    <option class="12" value="<?=$url['BUMP']['ind']?>"><?=$url['BUMP']['name']?></option>
                    <option class="12" value="<?=$url['CAMP']['ind']?>"><?=$url['CAMP']['name']?></option>
                    <option class="12" value="<?=$url['SORBA Huntsville']['ind']?>"><?=$url['SORBA Huntsville']['name']?></option>
                    <option class="12" value="<?=$url['CVA']['ind']?>"><?=$url['CVA']['name']?></option>
                    <option class="12" value="<?=$url['NEABA']['ind']?>"><?=$url['NEABA']['name']?></option>
                    <option class="12" value="<?=$url['SAMBA']['ind']?>"><?=$url['SAMBA']['name']?></option>
                    <option class="12" value="<?=$url['SAM-SORBA']['ind']?>"><?=$url['SAM-SORBA']['name']?></option>
                    <option class="12" value="<?=$url['WAMBA']['ind']?>"><?=$url['WAMBA']['name']?></option>
                <option class="12" value="<?=$sorba_ind_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- Alabama Retailer -->
                <option class="13" value="99">Please Select</option>
                    <option class="13" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Birmingham Urban Mountain Pedalers (BUMP)'?>">Birmingham Urban Mountain Pedalers (BUMP)</option>
                    <option class="13" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Central Alabama Mountain Pedalers (CAMP)'?>">Central Alabama Mountain Pedalers (CAMP)</option>
                    <option class="13" value="<?=$retail_url . '&custom_76=Southeast&custom_77=SORBA Huntsville'?>">SORBA Huntsville</option>
                    <option class="13" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Chattahoochee Valley Area SORBA (CVA)'?>">Chattahoochee Valley Area SORBA (CVA)</option>
                    <option class="13" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Northeast Alabama Bicycle Association (NEABA)'?>">Northeast Alabama Bicycle Association (NEABA)</option>
                    <option class="13" value="<?=$retail_url . '&custom_76=Southeast&custom_77=South Alabama Mountain Bike Association (SAMBA)'?>">South Alabama Mountain Bike Association (SAMBA)</option>
                    <option class="13" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Southeast Alabama Mountainbikers (SAM-SORBA)'?>">Southeast Alabama Mountainbikers (SAM-SORBA)</option>
                    <option class="13" value="<?=$retail_url . '&custom_76=Southeast&custom_77=West Alabama Mountain Biking Association (WAMBA)'?>">West Alabama Mountain Biking Association (WAMBA)</option>
                <option class="13" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- Alaska --> 
                <option class="88" value="99">Please Select</option>
                    <option class="88" value="<?=$url['L49']['ind']?>"><?=$url['L49']['name']?></option>
                <option class="88" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Alaska Retailer --> 
                <option class="89" value="99">Please Select</option>
                    <option class="89" value="<?=$retail_url . '&custom_76=Alaska&custom_77=Levitation 49 (L49)'?>">Levitation 49 (L49)</option>
                <option class="89" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Arizona -->
                <option class="30" value="99">Please Select</option>
                    <option class="30" value="<?=$url['CRATA']['ind']?>"><?=$url['CRATA']['name']?></option>
                    <option class="30" value="<?=$url['DFMBA']['ind']?>"><?=$url['DFMBA']['name']?></option>
                    <option class="30" value="<?=$url['PMBA']['ind']?>"><?=$url['PMBA']['name']?></option>
                    <option class="30" value="<?=$url['SDMB']['ind']?>"><?=$url['SDMB']['name']?></option>
					<option class="30" value="<?=$url['VVCC']['ind']?>"><?=$url['VVCC']['name']?></option>
                    <option class="30" value="<?=$url['WVTA']['ind']?>"><?=$url['WVTA']['name']?></option>
                <option class="30" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Arizona Retailer -->
                <option class="31" value="99">Please Select</option>
                    <option class="31" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Colorado River Area Trail Alliance (CRATA)'?>">Colorado River Area Trail Alliance (CRATA)</option>
                    <option class="31" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Desert Foothills Mountain Bike Association (DFMBA)'?>">Desert Foothills Mountain Bike Association (DFMBA)</option>
                    <option class="31" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Prescott Mountain Bike Alliance (PMBA)'?>">Prescott Mountain Bike Alliance (PMBA)</option>
                    <option class="31" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Sonoran Desert Mountain Bicyclists (SDMB)'?>">Sonoran Desert Mountain Bicyclists (SDMB)</option>
                    <option class="31" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Verde Valley Cyclists Coalition (VVCC)'?>">Verde Valley Cyclists Coalition (VVCC)</option>
                    <option class="31" value="<?=$retail_url . '&custom_76=Southwest&custom_77=West Valley Trail Alliance (WVTA)'?>">West Valley Trail Alliance (WVTA)</option>
                <option class="31" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Arkansas -->
                <option class="66" value="99">Please Select</option>
                    <option class="66" value="<?=$url['CATA']['ind']?>"><?=$url['CATA']['name']?></option>
                    <option class="66" value="<?=$url['FAST']['ind']?>"><?=$url['FAST']['name']?></option>
                    <option class="66" value="<?=$url['NMTA']['ind']?>"><?=$url['NMTA']['name']?></option>
                    <option class="66" value="<?=$url['OORC']['ind']?>"><?=$url['OORC']['name']?></option>
                <option class="66" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Arkansas Retailer -->
                <option class="67" value="99">Please Select</option>
                    <option class="67" value="<?=$retail_url . '&custom_76=South Central&custom_77=Central Arkansas Trail Alliance (CATA)'?>">Central Arkansas Trail Alliance (CATA)</option>
                    <option class="67" value="<?=$retail_url . '&custom_76=South Central&custom_77=Friends of Arkansas Singletrack (FAST)'?>">Friends of Arkansas Singletrack (FAST)</option>
                    <option class="67" value="<?=$retail_url . '&custom_76=Southeast&custom_77=North Mississippi Trail Alliance (NMTA)'?>">North Mississippi Trail Alliance (NMTA)</option>
                    <option class="67" value="<?=$retail_url . '&custom_76=South Central&custom_77=Ozark Off Road Cyclists (OORC)'?>">Ozark Off Road Cyclists (OORC)</option>
                <option class="67" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- California -->
                <option class="16" value="99">Please Select</option>
                    <option class="16" value="<?=$url['BONC']['ind']?>"><?=$url['BONC']['name']?></option>
                    <option class="16" value="<?=$url['CCORC']['ind']?>"><?=$url['CCORC']['name']?></option>
                    <option class="16" value="<?=$url['CCCMB']['ind']?>"><?=$url['CCCMB']['name']?></option>
                    <option class="16" value="<?=$url['CORBA']['ind']?>"><?=$url['CORBA']['name']?></option>
                    <option class="16" value="<?=$url['CRATA']['ind']?>"><?=$url['CRATA']['name']?></option>
                    <option class="16" value="<?=$url['FATRAC']['ind']?>"><?=$url['FATRAC']['name']?></option>
                    <option class="16" value="<?=$url['GTH']['ind']?>"><?=$url['GTH']['name']?></option>
                    <option class="16" value="<?=$url['IDYLLWILD']['fam']?>"><?=$url['IDYLLWILD']['name']?></option>
                    <option class="16" value="<?=$url['IVMTB']['ind']?>"><?=$url['IVMTB']['name']?></option>
                    <option class="16" value="<?=$url['JMBA']['ind']?>"><?=$url['JMBA']['name']?></option>
                    <option class="16" value="<?=$url['LCTC']['ind']?>"><?=$url['LCTC']['name']?></option>
                    <option class="16" value="<?=$url['MORCA']['ind']?>"><?=$url['MORCA']['name']?></option>
                    <option class="16" value="<?=$url['MSMBA']['ind']?>"><?=$url['MSMBA']['name']?></option>
                    <option class="16" value="<?=$url['MBoSC']['ind']?>"><?=$url['MBoSC']['name']?></option>
                    <option class="16" value="<?=$url['MWBA']['ind']?>"><?=$url['MWBA']['name']?></option>
                    <option class="16" value="<?=$url['RCMBA']['ind']?>"><?=$url['RCMBA']['name']?></option>
                    <option class="16" value="<?=$url['SDMBA']['ind']?>"><?=$url['SDMBA']['name']?></option>
                    <option class="16" value="<?=$url['SBMTV']['ind']?>"><?=$url['SBMTV']['name']?></option>
                    <option class="16" value="<?=$url['SHARE']['ind']?>"><?=$url['SHARE']['name']?></option>
                    <option class="16" value="<?=$url['SEMBA']['ind']?>"><?=$url['SEMBA']['name']?></option>
                    <option class="16" value="<?=$url['SVMTB']['ind']?>"><?=$url['SVMTB']['name']?></option>
			    	<option class="16" value="<?=$url['SABA']['ind']?>"><?=$url['SABA']['name']?></option>
                <option class="16" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- California Retailer -->
                <option class="17" value="99">Please Select</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Bicyclists of Nevada County (BONC)'?>">Bicyclists of Nevada County (BONC)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Central California Off Road Cyclists (CCORC)'?>">Central California Off Road Cyclists (CCORC)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Central Coast Concerned Mountain Bikers (CCCMB)'?>">Central Coast Concerned Mountain Bikers (CCCMB)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Concerned Off-Road Bicyclists Association (CORBA)'?>">Concerned Off-Road Bicyclists Association (CORBA)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Colorado River Area Trail Alliance (CRATA)'?>">Colorado River Area Trail Alliance (CRATA)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Folsom Auburn Trail Riders Action Coalition (FATRAC)'?>">Folsom Auburn Trail Riders Action Coalition (FATRAC)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Groveland Trail Heads (GTH)'?>">Groveland Trail Heads (GTH)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Idyllwild Cycling'?>">Idyllwild Cycling</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Inland Valley Mountain Bike Association (IVMTB)'?>">Inland Valley Mountain Bike Association (IVMTB)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Jefferson Mountain Bike Association (JMBA)'?>">Jefferson Mountain Bike Association (JMBA)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Lake County Trails Coalition (LCTC)'?>">Lake County Trails Coalition (LCTC)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Monterey Off Road Cycling Association (MORCA)'?>">Monterey Off Road Cycling Association (MORCA)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Mount Shasta Mountain Bike Association (MSMBA)'?>">Mount Shasta Mountain Bike Association (MSMBA)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Mountain Bikers of Santa Cruz (MBoSC)'?>">Mountain Bikers of Santa Cruz (MBoSC)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Mount Wilson Bicycling Association (MWBA)'?>">Mount Wilson Bicycling Association (MWBA)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Redwood Coast Mountain Bike Association (RCMBA)'?>">Redwood Coast Mountain Bike Association (RCMBA)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=San Diego Mountain Biking Association (SDMBA)'?>">San Diego Mountain Biking Association (SDMBA)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Santa Barbara Mountain Bike Trail Volunteers (SBMTV)'?>">Santa Barbara Mountain Bike Trail Volunteers (SBMTV)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=SHARE Mountain Bike Club (SHARE)'?>">SHARE Mountain Bike Club (SHARE)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Sierra Eastside Mountain Bike Association (SEMBA)'?>">Sierra Eastside Mountain Bike Association (SEMBA)</option>
                    <option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Silicon Valley Mountain Bikers (SVMTB)'?>">Silicon Valley Mountain Bikers (SVMTB)</option>
					<option class="17" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Susanville Area Bicycle Association (SABA)'?>">Susanville Area Bicycle Association (SABA)</option>
                <option class="17" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Colorado -->
                <option class="14" value="99">Please Select</option>
                    <option class="14" value="<?=$url['BMA']['ind']?>"><?=$url['BMA']['name']?></option>
                    <option class="14" value="<?=$url['CCW']['ind']?>"><?=$url['CCW']['name']?></option>
                    <option class="14" value="<?=$url['COMBA']['ind']?>"><?=$url['COMBA']['name']?></option>
                    <option class="14" value="<?=$url['GMBA']['ind']?>"><?=$url['GMBA']['name']?></option>
                    <option class="14" value="<?=$url['MWTA']['ind']?>"><?=$url['MWTA']['name']?></option>
                    <option class="14" value="<?=$url['RFMBA']['ind']?>"><?=$url['RFMBA']['name']?></option>
                    <option class="14" value="<?=$url['RCR']['ind']?>"><?=$url['RCR']['name']?></option>
                    <option class="14" value="<?=$url['SMBA']['ind']?>"><?=$url['SMBA']['name']?></option>
                    <option class="14" value="<?=$url['SSS']['ind']?>"><?=$url['SSS']['name']?></option>
                    <option class="14" value="<?=$url['SFTS']['ind']?>"><?=$url['SFTS']['name']?></option>
                    <option class="14" value="<?=$url['VVMBA']['ind']?>"><?=$url['VVMBA']['name']?></option>
                <option class="14" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Colorado Retailer -->
                <option class="15" value="99">Please Select</option>
                    <option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Boulder Mountainbike Alliance (BMA)'?>">Boulder Mountainbike Alliance (BMA)</option>
                    <option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Cloud City Wheelers (CCW)'?>">Cloud City Wheelers (CCW)</option>
                    <option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Colorado Mountain Bike Association (COMBA)'?>">Colorado Mountain Bike Association (COMBA)</option>
                    <option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Grand Mountain Bike Alliance (GMBA)'?>">Grand Mountain Bike Alliance (GMBA)</option>
                    <option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Medicine Wheel Trail Advocates (MWTA)'?>">Medicine Wheel Trail Advocates (MWTA)</option>
                    <option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Roaring Fork Mountain Bike Association (RFMBA)'?>">Roaring Fork Mountain Bike Association (RFMBA)</option>
                    <option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=San Miguel Bike Alliance (SMBA)'?>">San Miguel Bike Alliance (SMBA)</option>
                    <option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Silverton Singletrack Society (SSS)'?>">Silverton Singletrack Society (SSS)</option>
                    <option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Routt County Riders (RCR)'?>">Routt County Riders (RCR)</option>
                    <option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Summit Fat Tire Society (SFTS)'?>">Summit Fat Tire Society (SFTS)</option>
                    <option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Vail Valley Mountain Bike Association (VVMBA)'?>">Vail Valley Mountain Bike Association (VVMBA)</option>
                <option class="15" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Delaware -->
                <option class="4" value="99">Please Select</option>
                    <option class="4" value="<?=$url['DTS']['ind']?>"><?=$url['DTS']['name']?></option>
                <option class="4" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Delaware Retailer -->
                <option class="5" value="99">Please Select</option>
                    <option class="5" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Delaware Trail Spinners (DTS)'?>">Delaware Trail Spinners (DTS)</option>
                <option class="5" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- District of Columbia -->
                <option class="64" value="99">Please Select</option>
                    <option class="64" value="<?=$url['MORE']['ind']?>"><?=$url['MORE']['name']?></option>
                <option class="64" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- District of Columbia Retailer -->
                <option class="65" value="99">Please Select</option>
                    <option class="65" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Mid-Atlantic Off-Road Enthusiasts (MORE)'?>">Mid-Atlantic Off-Road Enthusiasts (MORE)</option>
                <option class="65" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Florida -->
                <option class="18" value="99">Please Select</option>
                    <option class="18" value="<?=$url['Flagler Area Biking SORBA']['ind']?>"><?=$url['Flagler Area Biking SORBA']['name']?></option>
                    <option class="18" value="<?=$url['FMC']['ind']?>"><?=$url['FMC']['name']?></option>
                    <option class="18" value="<?=$url['SORBA Jax']['ind']?>"><?=$url['SORBA Jax']['name']?></option>
                    <option class="18" value="<?=$url['SORBA Orlando']['ind']?>"><?=$url['SORBA Orlando']['name']?></option>
                    <option class="18" value="<?=$url['TMBA']['ind']?>"><?=$url['TMBA']['name']?></option>
                <option class="18" value="<?=$sorba_ind_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- Florida Retailer -->
                <option class="19" value="99">Please Select</option>
                    <option class="19" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Flagler Area Biking SORBA'?>">Flagler Area Biking SORBA</option>
                    <option class="19" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Florida Mudcutters (FMC)'?>">Florida Mudcutters (FMC)</option>
                    <option class="19" value="<?=$retail_url . '&custom_76=Southeast&custom_77=SORBA Jax'?>">SORBA Jax</option>
                    <option class="19" value="<?=$retail_url . '&custom_76=Southeast&custom_77=SORBA Orlando'?>">SORBA Orlando</option>
                    <option class="19" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Tallahassee Mountain Bike Association (TMBA)'?>">Tallahassee Mountain Bike Association (TMBA)</option>
                <option class="19" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- Georgia -->
                <option class="22" value="99">Please Select</option>
                    <option class="22" value="<?=$url['CSRA']['ind']?>"><?=$url['CSRA']['name']?></option>
                    <option class="22" value="<?=$url['SORBA Athens']['ind']?>"><?=$url['SORBA Athens']['name']?></option>
                    <option class="22" value="<?=$url['SORBA Atlanta']['ind']?>"><?=$url['SORBA Atlanta']['name']?></option>
                    <option class="22" value="<?=$url['EMBA SORBA']['ind']?>"><?=$url['EMBA SORBA']['name']?></option>
                    <option class="22" value="<?=$url['FRMBA']['ind']?>"><?=$url['FRMBA']['name']?></option>
                    <option class="22" value="<?=$url['GATR']['ind']?>"><?=$url['GATR']['name']?></option>
                    <option class="22" value="<?=$url['CVA']['ind']?>"><?=$url['CVA']['name']?></option>
                    <option class="22" value="<?=$url['OMBA Middle Georgia']['ind']?>"><?=$url['OMBA Middle Georgia']['name']?></option>
                    <option class="22" value="<?=$url['Northwest Georgia SORBA']['ind']?>"><?=$url['Northwest Georgia SORBA']['name']?></option>
                    <option class="22" value="<?=$url['Northwest Georgia SORBA']['ind']?>"><?=$url['Northwest Georgia SORBA']['name']?></option>
                    <option class="22" value="<?=$url['RAMBO']['ind']?>"><?=$url['RAMBO']['name']?></option>
                    <option class="22" value="<?=$url['SORBA West Georgia']['ind']?>"><?=$url['SORBA West Georgia']['name']?></option>
                    <option class="22" value="<?=$url['SORBA Woodstock']['ind']?>"><?=$url['SORBA Woodstock']['name']?></option>
                    <option class="22" value="<?=$url['SEGA']['ind']?>"><?=$url['SEGA']['name']?></option>
                <option class="22" value="<?=$sorba_ind_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- Georgia Retailer -->
                <option class="23" value="99">Please Select</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Augusta-GA and Aiken-SC (CSRA)'?>">Augusta-GA and Aiken-SC (CSRA)</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=SORBA Athens'?>">SORBA Athens</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=SORBA Atlanta'?>">SORBA Atlanta</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Ellijay Mountain Bike Association (EMBA SORBA)'?>">Ellijay Mountain Bike Association (EMBA SORBA)</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Flint River Mountain Bike Association (FRMBA)'?>">Flint River Mountain Bike Association (FRMBA)</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Gwinnett Area Trail Riders (GATR)'?>">Gwinnett Area Trail Riders (GATR)</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Chattahoochee Valley Area SORBA (CVA)'?>">Chattahoochee Valley Area SORBA (CVA)</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Ocmulgee Mountain Biking Association (OMBA Middle Georgia)'?>">Ocmulgee Mountain Biking Association (OMBA Middle Georgia)</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Northeast Georgia SORBA'?>">Northeast Georgia SORBA</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Northwest Georgia SORBA'?>">Northwest Georgia SORBA</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Roswell Alpharetta Mountain Bike Organization (RAMBO)'?>">Roswell Alpharetta Mountain Bike Organization (RAMBO)</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=SORBA West Georgia'?>">SORBA West Georgia</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=SORBA Woodstock'?>">SORBA Woodstock</option>
                    <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Southeast Georgia SORBA (SEGA SORBA)'?>">Southeast Georgia SORBA (SEGA SORBA)</option>
                <option class="23" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- Hawaii -->
                <option class="48" value="99">Please Select</option>
                    <option class="48" value="<?=$url['MMBC']['ind']?>"><?=$url['MMBC']['name']?></option>
                    <option class="48" value="<?=$url['OMTBO']['ind']?>"><?=$url['OMTBO']['name']?></option>
                <option class="48" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Hawaii Retailer -->
                <option class="49" value="99">Please Select</option>
                    <option class="49" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Maui Mountain Bike Coalition (MMBC)'?>">Maui Mountain Bike Coalition (MMBC)</option>
                    <option class="49" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Oahu Mountain Bike Ohana (OMTBO)'?>">Oahu Mountain Bike Ohana (OMTBO)</option>
                <option class="49" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Idaho -->
                <option class="42" value="99">Please Select</option>
                    <option class="42" value="<?=$url['BAMBA']['ind']?>"><?=$url['BAMBA']['name']?></option>
                    <option class="42" value="<?=$url['CIMBA']['ind']?>"><?=$url['CIMBA']['name']?></option>
                    <option class="42" value="<?=$url['KMR']['ind']?>"><?=$url['KMR']['name']?></option>
                    <option class="42" value="<?=$url['MBT']['ind']?>"><?=$url['MBT']['name']?></option>
                    <option class="42" value="<?=$url['SIMBA']['ind']?>"><?=$url['SIMBA']['name']?></option>
                    <option class="42" value="<?=$url['WRBC']['ind']?>"><?=$url['WRBC']['name']?></option>
                <option class="42" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Idaho Retailer -->
                <option class="43" value="99">Please Select</option>
                    <option class="43" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Boise Area Mountain Bike Association (BAMBA)'?>">Boise Area Mountain Bike Association (BAMBA)</option>
                    <option class="43" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Central Idaho Mountain Bike Association (CIMBA)'?>">Central Idaho Mountain Bike Association (CIMBA)</option>
                    <option class="43" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Kootenai Mountain Riders (KMR)'?>">Kootenai Mountain Riders (KMR)</option>
                    <option class="43" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Mountain Bike the Tetons (MBT)'?>">Mountain Bike the Tetons (MBT)</option>
                    <option class="43" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Southern Idaho Mountain Biking Association (SIMBA)'?>">Southern Idaho Mountain Biking Association (SIMBA)</option>
                    <option class="43" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Wood River Bicycle Coalition (WRBC)'?>">Wood River Bicycle Coalition (WRBC)</option>
                <option class="43" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Indiana -->
                <option class="38" value="99">Please Select</option>
                    <option class="38" value="<?=$url['CORA']['ind']?>"><?=$url['CORA']['name']?></option>
                    <option class="38" value="<?=$url['EMBA']['ind']?>"><?=$url['EMBA']['name']?></option>
                    <option class="38" value="<?=$url['HMBA']['ind']?>"><?=$url['HMBA']['name']?></option>
                    <option class="38" value="<?=$url['NITRO']['ind']?>"><?=$url['NITRO']['name']?></option>
                    <option class="38" value="<?=$url['NIMBA']['ind']?>"><?=$url['NIMBA']['name']?></option>
                <option class="38" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Indiana Retailer -->
                <option class="39" value="99">Please Select</option>
                    <option class="39" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Cincinnati Off-Road Alliance (CORA)'?>">Cincinnati Off-Road Alliance (CORA)</option>
                    <option class="39" value="<?=$retail_url . '&custom_76=Evansville Mountain Bike Association (EMBA)'?>">Evansville Mountain Bike Association (EMBA)</option>
                    <option class="39" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Hoosier Mountain Bike Association (HMBA)'?>">Hoosier Mountain Bike Association (HMBA)</option>
                    <option class="39" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Northeast Indiana Trail Riders Organization (NITRO)'?>">Northeast Indiana Trail Riders Organization (NITRO)</option>
                    <option class="39" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Northern Indiana Mountain Bike Association (NIMBA)'?>">Northern Indiana Mountain Bike Association (NIMBA)</option>
                <option class="39" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Illinois -->
                <option class="60" value="99">Please Select</option>
                    <option class="60" value="<?=$url['CILTA']['ind']?>"><?=$url['CILTA']['name']?></option>
                    <option class="60" value="<?=$url['CAMBr']['ind']?>"><?=$url['CAMBr']['name']?></option>
                <option class="60" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Illinois Retailer -->
                <option class="61" value="99">Please Select</option>
                    <option class="61" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Central Illinois Trails Association (CILTA)'?>">Central Illinois Trails Association (CILTA)</option>
                    <option class="61" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Chicago Area Mountain Bikers (CAMBr)'?>">Chicago Area Mountain Bikers (CAMBr)</option>
                <option class="61" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Iowa -->
                <option class="28" value="99">Please Select</option>
                    <option class="28" value="<?=$url['CITA']['ind']?>"><?=$url['CITA']['name']?></option>
                    <option class="28" value="<?=$url['LAMBA']['ind']?>"><?=$url['LAMBA']['name']?></option>
			    	<option class="28" value="<?=$url['THOR']['ind']?>"><?=$url['THOR']['name']?></option>
                <option class="28" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Iowa Retailer -->
                <option class="29" value="99">Please Select</option>
                    <option class="29" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Central Iowa Trail Association (CITA)'?>">Central Iowa Trail Association (CITA)</option>
                    <option class="29" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Linn Area Mountain Bike Association (LAMBA)'?>">Linn Area Mountain Bike Association (LAMBA)</option>
                    <option class="29" value="<?=$retail_url . '&custom_76=South Central&custom_77=Trails Have Our Respect (THOR)'?>">Trails Have Our Respect (THOR)</option>
                <option class="29" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Kansas -->
                <option class="84" value="99">Please Select</option>
                    <option class="84" value="<?=$url['KSS']['ind']?>"><?=$url['KSS']['name']?></option>
                <option class="84" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Kansas Retailer -->
                <option class="85" value="99">Please Select</option>
                    <option class="85" value="<?=$retail_url . '&custom_76=South Central&custom_77=Kansas Singletrack Society (KSS)'?>">Kansas Singletrack Society (KSS)</option>
                <option class="85" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Kentucky -->
                <option class="56" value="99">Please Select</option>
                    <option class="56" value="<?=$url['CORA']['ind']?>"><?=$url['CORA']['name']?></option>
                    <option class="56" value="<?=$url['EMBA']['ind']?>"><?=$url['EMBA']['name']?></option>
                    <option class="56" value="<?=$url['KyMBA Louisville']['ind']?>"><?=$url['KyMBA Louisville']['name']?></option>
                    <option class="56" value="<?=$url['SKYMBA']['fam']?>"><?=$url['SKYMBA']['name']?></option>
                <option class="56" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Kentucky Retailer -->
                <option class="57" value="99">Please Select</option>
                    <option class="57" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Cincinnati Off-Road Alliance (CORA)'?>">Cincinnati Off-Road Alliance (CORA)</option>
                    <option class="57" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Evansville Mountain Bike Association (EMBA)'?>">Evansville Mountain Bike Association (EMBA)</option>
                    <option class="57" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Kentucky Mountain Bike Association - Louisville (KyMBA Louisville)'?>">Kentucky Mountain Bike Association - Louisville (KyMBA Louisville)</option>
                    <option class="57" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Southwest Kentucky Mountain Bike Association (SKyMBA)'?>">Southwest Kentucky Mountain Bike Association (SKyMBA)</option>
                <option class="57" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Louisiana -->
                <option class="82" value="99">Please Select</option>
			    	<option class="82" value="<?=$url['LOCO']['ind']?>"><?=$url['LOCO']['name']?></option>
			    	<option class="82" value="<?=$url['NOMAMBO']['ind']?>"><?=$url['NOMAMBO']['name']?></option>
                <option class="82" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Louisiana Retailer -->
                <option class="83" value="99">Please Select</option>
			    	<option class="83" value="<?=$retail_url . '&custom_76=South Central&custom_77=Louisiana Offroad Cycling Organization (LOCO)'?>">Louisiana Offroad Cycling Organization (LOCO)</option>
					<option class="83" value="<?=$retail_url . '&custom_76=South Central&custom_77=New Orleans Metro Area Mountain Bike Organization (NOMAMBO)'?>">New Orleans Metro Area Mountain Bike Organization (NOMAMBO)</option>
                <option class="83" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Maine -->
                <option class="80" value="99">Please Select</option>
                    <option class="80" value="<?=$url['NMTA-ME']['ind']?>"><?=$url['NMTA-ME']['name']?></option>
                <option class="80" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Maine Retailer -->
                <option class="81" value="99">Please Select</option>
                    <option class="81" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Northern Maine Trails Alliance (NMTA)'?>">Northern Maine Trails Alliance (NMTA)</option>
                <option class="81" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Maryland -->
                <option class="46" value="99">Please Select</option>
                    <option class="46" value="<?=$url['DTS']['ind']?>"><?=$url['DTS']['name']?></option>
                    <option class="46" value="<?=$url['ESIMBA']['ind']?>"><?=$url['ESIMBA']['name']?></option>
                    <option class="46" value="<?=$url['MORE']['ind']?>"><?=$url['MORE']['name']?></option>
                    <option class="46" value="<?=$url['SMMB']['ind']?>"><?=$url['SMMB']['name']?></option>
                <option class="46" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Maryland Retailer -->
                <option class="47" value="99">Please Select</option>
                    <option class="47" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Delaware Trail Spinners (DTS)'?>">Delaware Trail Spinners (DTS)</option>
                    <option class="47" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Eastern Shore IMBA (ESIMBA)'?>">Eastern Shore IMBA (ESIMBA)</option>
                    <option class="47" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Mid-Atlantic Off-Road Enthusiasts (MORE)'?>">Mid-Atlantic Off-Road Enthusiasts (MORE)</option>
                    <option class="47" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Southern Maryland Mountain Biking (SMMB)'?>">Southern Maryland Mountain Biking (SMMB)</option>
                <option class="47" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Michigan -->
                <option class="32" value="99">Please Select</option>
                    <option class="32" value="<?=$url['CTHC']['ind']?>"><?=$url['CTHC']['name']?></option>
                    <option class="32" value="<?=$url['CRAMBA']['ind']?>"><?=$url['CRAMBA']['name']?></option>
                    <option class="32" value="<?=$url['MEMBA']['ind']?>"><?=$url['MEMBA']['name']?></option>
                    <option class="32" value="<?=$url['MMMBA']['ind']?>"><?=$url['MMMBA']['name']?></option>
                    <option class="32" value="<?=$url['MCMBA']['ind']?>"><?=$url['MCMBA']['name']?></option>
                    <option class="32" value="<?=$url['NIMBA']['ind']?>"><?=$url['NIMBA']['name']?></option>
                    <option class="32" value="<?=$url['NMMBA']['ind']?>"><?=$url['NMMBA']['name']?></option>
                    <option class="32" value="<?=$url['Poto MBA']['ind']?>"><?=$url['Poto MBA']['name']?></option>
                    <option class="32" value="<?=$url['RAMBA']['ind']?>"><?=$url['RAMBA']['name']?></option>
                    <option class="32" value="<?=$url['SWMMBA']['ind']?>"><?=$url['SWMMBA']['name']?></option>
                    <option class="32" value="<?=$url['TOMMBA']['ind']?>"><?=$url['TOMMBA']['name']?></option>
                    <option class="32" value="<?=$url['WMMBA']['ind']?>"><?=$url['WMMBA']['name']?></option>
                <option class="32" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Michigan Retailer -->
                <option class="33" value="99">Please Select</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Clinton River Area Mountain Bike Association (CRAMBA)'?>">Clinton River Area Mountain Bike Association (CRAMBA)</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Copper Harbor Trails Club (CHTC)'?>">Copper Harbor Trails Club (CHTC)</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Michigan&#039;s Edge Mountain Biking Association (MEMBA)'?>">Michigan&#039;s Edge Mountain Biking Association (MEMBA)</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Mid-Michigan Mountain Biking Association (MMMBA)'?>">Mid-Michigan Mountain Biking Association (MMMBA)</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Motor City Mountain Biking Association (MCMBA)'?>">Motor City Mountain Biking Association (MCMBA)</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Northern Indiana Mountain Bike Association (NIMBA)'?>">Northern Indiana Mountain Bike Association (NIMBA)</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Northern Michigan Mountain Biking Association (NMMBA)'?>">Northern Michigan Mountain Biking Association (NMMBA)</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Potawatomi Mountain Bike Association (Poto MBA)'?>">Potawatomi Mountain Bike Association (Poto MBA)</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Range Area Mountain Bike Association (RAMBA)'?>">Range Area Mountain Bike Association (RAMBA)</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Southwest Michigan Mountain Bike Association (SWMMBA)'?>">Southwest Michigan Mountain Bike Association (SWMMBA)</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Top of Michigan Mountain Bike Association (TOMMBA)'?>">Top of Michigan Mountain Bike Association (TOMMBA)</option>
                    <option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=West Michigan Mountain Biking Alliance (WMMBA)'?>">West Michigan Mountain Biking Alliance (WMMBA)</option>
                <option class="33" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Minnesota -->
                <option class="2" value="99">Please Select</option>
                    <option class="2" value="<?=$url['CROCT']['ind']?>"><?=$url['CROCT']['name']?></option>
                    <option class="2" value="<?=$url['CLMTBC']['ind']?>"><?=$url['CLMTBC']['name']?></option>
                    <option class="2" value="<?=$url['COGGS']['ind']?>"><?=$url['COGGS']['name']?></option>
                    <option class="2" value="<?=$url['GRIMBA']['ind']?>"><?=$url['GRIMBA']['name']?></option>
                    <option class="2" value="<?=$url['IROC']['ind']?>"><?=$url['IROC']['name']?></option>
                    <option class="2" value="<?=$url['MAMB']['ind']?>"><?=$url['MAMB']['name']?></option>
                    <option class="2" value="<?=$url['MORC-MN']['ind']?>"><?=$url['MORC-MN']['name']?></option>
                    <option class="2" value="<?=$url['RAMBO-MN']['ind']?>"><?=$url['RAMBO-MN']['name']?></option>
                    <option class="2" value="<?=$url['SCA']['ind']?>"><?=$url['SCA']['name']?></option>
                    <option class="2" value="<?=$url['WAMB']['ind']?>"><?=$url['WAMB']['name']?></option>
                    <option class="2" value="<?=$url['WBC']['ind']?>"><?=$url['WBC']['name']?></option>
                <option class="2" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Minnesota Retailer -->
                <option class="3" value="99">Please Select</option>
                    <option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Cannon River Offroad Cycling and Trails (CROCT)'?>">Cannon River Offroad Cycling and Trails (CROCT)</option>
                    <option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Cuyuna Lakes Mountain Bike Crew (CLMTBC)'?>">Cuyuna Lakes Mountain Bike Crew (CLMTBC)</option>
                    <option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Cyclists of Gitchee Gumee Shores (COGGS)'?>">Cyclists of Gitchee Gumee Shores (COGGS)</option>
                    <option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Grand Rapids and Itasca Mountain Bicycling Association (GRIMBA)'?>">Grand Rapids and Itasca Mountain Bicycling Association (GRIMBA)</option>
                    <option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Iron Range Off-Road Cyclists (IROC)'?>">Iron Range Off-Road Cyclists (IROC)</option>
                    <option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Mankato Area Mountain Bikers (MAMB)'?>">Mankato Area Mountain Bikers (MAMB)</option>
                    <option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Minnesota Off-Road Cyclists (MORC)'?>">Minnesota Off-Road Cyclists (MORC)</option>
                    <option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Red Wing Area Mountain Bike Organization (RAMBO)'?>">Red Wing Area Mountain Bike Organization (RAMBO)</option>
                    <option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Superior Cycling Association (SCA)'?>">Superior Cycling Association (SCA)</option>
                    <option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Winona Area Mountain Bikers (WAMB)'?>">Winona Area Mountain Bikers (WAMB)</option>
                    <option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Woolly Bike Club (WBC)'?>">Woolly Bike Club (WBC)</option>
                <option class="3" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Mississippi -->
                <option class="78" value="99">Please Select</option>
                    <option class="78" value="<?=$url['NMTA']['ind']?>"><?=$url['NMTA']['name']?></option>
                    <option class="78" value="<?=$url['SAMBA']['ind']?>"><?=$url['SAMBA']['name']?></option>
                    <option class="78" value="<?=$url['TCMBA']['ind']?>"><?=$url['TCMBA']['name']?></option>
                <option class="78" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Mississippi Retailer -->
                <option class="79" value="99">Please Select</option>
                    <option class="79" value="<?=$retail_url . '&custom_76=Southeast&custom_77=North Mississippi Trail Alliance (NMTA)'?>">North Mississippi Trail Alliance (NMTA)</option>
                    <option class="79" value="<?=$retail_url . '&custom_76=Southeast&custom_77=South Alabama Mountain Bike Association (SAMBA)'?>">South Alabama Mountain Bike Association (SAMBA)</option>
                    <option class="79" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Tri-County Mountain Bike Association (TCMBA)'?>">Tri-County Mountain Bike Association (TCMBA)</option>
                <option class="79" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Missouri -->
                <option class="70" value="99">Please Select</option>
                    <option class="70" value="<?=$url['MORC-MO']['ind']?>"><?=$url['MORC-MO']['name']?></option>
                <option class="70" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Missouri Retailer -->
                <option class="71" value="99">Please Select</option>
                    <option class="71" value="<?=$retail_url . '&custom_76=South Central&custom_77=Midwest Off Road Cyclists (MORC)'?>">Midwest Off Road Cyclists (MORC)</option>
                <option class="71" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Montana -->
                <option class="72" value="99">Please Select</option>
                    <option class="72" value="<?=$url['BBC']['ind']?>"><?=$url['BBC']['name']?></option>
                    <option class="72" value="<?=$url['KMR']['ind']?>"><?=$url['KMR']['name']?></option>
                    <option class="72" value="<?=$url['MTBM']['ind']?>"><?=$url['MTBM']['name']?></option>
                    <option class="72" value="<?=$url['PU']['ind']?>"><?=$url['PU']['name']?></option>
                <option class="72" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Montana Retailer -->
                <option class="73" value="99">Please Select</option>
                    <option class="73" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Bitterroot Backcountry Cyclists (BBC)'?>">Bitterroot Backcountry Cyclists (BBC)</option>
                    <option class="73" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Kootenai Mountain Riders (KMR)'?>">Kootenai Mountain Riders (KMR)</option>
                    <option class="73" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=MTB Missoula (MTBM)'?>">MTB Missoula (MTBM)</option>
                    <option class="73" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Pedal United (PU)'?>">Pedal United (PU)</option>
                <option class="73" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Nebraska -->
                <option class="76" value="99">Please Select</option>
			    	<option class="76" value="<?=$url['THOR']['ind']?>"><?=$url['THOR']['name']?></option>
                <option class="76" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Nebraska Retailer -->
                <option class="77" value="99">Please Select</option>
                    <option class="77" value="<?=$retail_url . '&custom_76=South Central&custom_77=Trails Have Our Respect (THOR)'?>">Trails Have Our Respect (THOR)</option>
                <option class="77" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Nevada -->
                <option class="40" value="99">Please Select</option>
                    <option class="40" value="<?=$url['SNMBA']['ind']?>"><?=$url['SNMBA']['name']?></option>
			    	<option class="40" value="<?=$url['SABA']['ind']?>"><?=$url['SABA']['name']?></option>
                <option class="40" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Nevada Retailer -->
                <option class="41" value="99">Please Select</option>
                    <option class="41" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Southern Nevada Mountain Bike Association (SNMBA)'?>">Southern Nevada Mountain Bike Association (SNMBA)</option>
					<option class="41" value="<?=$retail_url . '&custom_76=California-Hawaii&custom_77=Susanville Area Bicycle Association (SABA)'?>">Susanville Area Bicycle Association (SABA)</option>
                <option class="41" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- New Jersey -->
                <option class="86" value="99">Please Select</option>
                    <option class="86" value="<?=$url['PMTB']['ind']?>"><?=$url['PMTB']['name']?></option>
                <option class="86" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- New Jersey Retailer -->
                <option class="87" value="99">Please Select</option>
                    <option class="87" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Palisades MTB (PMTB)'?>">Palisades MTB (PMTB)</option>
                <option class="87" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- New Mexico -->
                <option class="34" value="99">Please Select</option>
                    <option class="34" value="<?=$url['AMBA']['ind']?>"><?=$url['AMBA']['name']?></option>
                    <option class="34" value="<?=$url['DNMA']['ind']?>"><?=$url['DNMA']['name']?></option>
                    <option class="34" value="<?=$url['GT']['ind']?>"><?=$url['GT']['name']?></option>
                    <option class="34" value="<?=$url['LASA']['ind']?>"><?=$url['LASA']['name']?></option>
                    <option class="34" value="<?=$url['SFFTS']['ind']?>"><?=$url['SFFTS']['name']?></option>
                <option class="34" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- New Mexico Retailer -->
                <option class="35" value="99">Please Select</option>
                    <option class="35" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Albuquerque Mountain Bike Association (AMBA)'?>">Albuquerque Mountain Bike Association (AMBA)</option>
                    <option class="35" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Del Norte MtB Alliance (DNMA)'?>">Del Norte MtB Alliance (DNMA)</option>
                    <option class="35" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Gallup Trails (GT)'?>">Gallup Trails (GT)</option>
                    <option class="35" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Los Alamos Tuff Riders (LATR)'?>">Los Alamos Tuff Riders (LATR)</option>
                    <option class="35" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Santa Fe Fat Tire Society (SFFTS)'?>">Santa Fe Fat Tire Society (SFFTS)</option>
                <option class="35" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- New York -->
                <option class="44" value="99">Please Select</option>
                    <option class="44" value="<?=$url['CAMBA-NY']['ind']?>"><?=$url['CAMBA-NY']['name']?></option>
                    <option class="44" value="<?=$url['CNY-DIRT']['ind']?>"><?=$url['CNY-DIRT']['name']?></option>
                    <option class="44" value="<?=$url['Cycle-CNY']['ind']?>"><?=$url['Cycle-CNY']['name']?></option>
                    <option class="44" value="<?=$url['FCBC']['ind']?>"><?=$url['FCBC']['name']?></option>
                    <option class="44" value="<?=$url['GROC']['ind']?>"><?=$url['GROC']['name']?></option>
                    <option class="44" value="<?=$url['NYCMTB']['ind']?>"><?=$url['NYCMTB']['name']?></option>
                    <option class="44" value="<?=$url['PMTB']['ind']?>"><?=$url['PMTB']['name']?></option>
                    <option class="44" value="<?=$url['WNYMBA']['ind']?>"><?=$url['WNYMBA']['name']?></option>
                <option class="44" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- New York Retailer -->
                <option class="45" value="99">Please Select</option>
                    <option class="45" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Central Adirondack Mountain Bike Association (CAMBA)'?>">Central Adirondack Mountain Bike Association (CAMBA)</option>
                    <option class="45" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=CNY DIRT'?>">CNY DIRT</option>
                    <option class="45" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Cycle-CNY'?>">Cycle-CNY</option>
                    <option class="45" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Fats In The Cats (FCBC)'?>">Fats In The Cats (FCBC)</option>
                    <option class="45" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Genesee Regional Off-Road Cyclists (GROC)'?>">Genesee Regional Off-Road Cyclists (GROC)</option>
                    <option class="45" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=New York City Mountain Bike Association (NYCMTB)'?>">New York City Mountain Bike Association (NYCMTB)</option>
                    <option class="45" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Palisades MTB (PMTB)'?>">Palisades MTB (PMTB)</option>
                    <option class="45" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Western New York Mountain Bicycling Association (WNYMBA)'?>">Western New York Mountain Bicycling Association (WNYMBA)</option>
                <option class="45" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- North Carolina -->
                <option class="20" value="99">Please Select</option>
                    <option class="20" value="<?=$url['Cape Fear SORBA']['ind']?>"><?=$url['Cape Fear SORBA']['name']?></option>
                    <option class="20" value="<?=$url['GFTS']['ind']?>"><?=$url['GFTS']['name']?></option>
                    <option class="20" value="<?=$url['NAS']['ind']?>"><?=$url['NAS']['name']?></option>
                    <option class="20" value="<?=$url['NWNC-MTBA']['ind']?>"><?=$url['NWNC-MTBA']['name']?></option>
                    <option class="20" value="<?=$url['PAS']['ind']?>"><?=$url['PAS']['name']?></option>
                    <option class="20" value="<?=$url['TORC']['ind']?>"><?=$url['TORC']['name']?></option>
                    <option class="20" value="<?=$url['Tarheel Trailblazers']['ind']?>"><?=$url['Tarheel Trailblazers']['name']?></option>
                <option class="20" value="<?=$sorba_ind_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- North Carolina Retailer -->
                <option class="21" value="99">Please Select</option>
                    <option class="21" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Cape Fear SORBA'?>">Cape Fear SORBA</option>
                    <option class="21" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Greensboro Fat Tire Society (GFTS)'?>">Greensboro Fat Tire Society (GFTS)</option>
                    <option class="21" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Nantahala Area SORBA (NAS)'?>">Nantahala Area SORBA (NAS)</option>
                    <option class="21" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Northwest North Carolina Mountain Bike Alliance (NWNC-MTBA)'?>">Northwest North Carolina Mountain Bike Alliance (NWNC-MTBA)</option>
                    <option class="21" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Pisgah Area SORBA (PAS)'?>">Pisgah Area SORBA (PAS)</option>
                    <option class="21" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Triangle Off-Road Cyclists (TORC)'?>">Triangle Off-Road Cyclists (TORC)</option>
                    <option class="21" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Tarheel Trailblazers'?>">Tarheel Trailblazers</option>
                <option class="21" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- Ohio -->
                <option class="54" value="99">Please Select</option>
                    <option class="54" value="<?=$url['AOA']['fam']?>"><?=$url['AOA']['name']?></option>
                    <option class="54" value="<?=$url['COMBO']['ind']?>"><?=$url['COMBO']['name']?></option>
                    <option class="54" value="<?=$url['CORA']['ind']?>"><?=$url['CORA']['name']?></option>
                    <option class="54" value="<?=$url['CAMBA-OH']['ind']?>"><?=$url['CAMBA-OH']['name']?></option>
                    <option class="54" value="<?=$url['MVMBA']['ind']?>"><?=$url['MVMBA']['name']?></option>
                    <option class="54" value="<?=$url['RBRTC']['ind']?>"><?=$url['RBRTC']['name']?></option>
                <option class="54" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Ohio Retailer -->
                <option class="55" value="99">Please Select</option>
                    <option class="55" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Appalachia Outdoor Adventurers (AOA)'?>">Appalachia Outdoor Adventurers (AOA)</option>
                    <option class="55" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Central Ohio Mountain Biking Organization (COMBO)'?>">Central Ohio Mountain Biking Organization (COMBO)</option>
                    <option class="55" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Cincinnati Off-Road Alliance (CORA)'?>">Cincinnati Off-Road Alliance (CORA)</option>
                    <option class="55" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Cleveland Area Mountain Bike Association (CAMBA)'?>">Cleveland Area Mountain Bike Association (CAMBA)</option>
                    <option class="55" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Miami Valley Mountain Bike Association (MVMBA)'?>">Miami Valley Mountain Bike Association (MVMBA)</option>
                    <option class="55" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Rust Belt Revival Trail Coalition (RBRTC)'?>">Rust Belt Revival Trail Coalition (RBRTC)</option>
                <option class="55" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Oklahoma -->
                <option class="74" value="99">Please Select</option>
                    <option class="74" value="<?=$url['OEF']['ind']?>"><?=$url['OEF']['name']?></option>
                <option class="74" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Oklahoma Retailer -->
                <option class="75" value="99">Please Select</option>
                    <option class="75" value="<?=$retail_url . '&custom_76=South Central&custom_77=Oklahoma Earthbike Fellowship (OEF)'?>">Oklahoma Earthbike Fellowship (OEF)</option>
                <option class="75" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Oregon -->
                <option class="6" value="99">Please Select</option>
                    <option class="6" value="<?=$url['BMSTC']['ind']?>"><?=$url['BMSTC']['name']?></option>
                    <option class="6" value="<?=$url['DOD']['ind']?>"><?=$url['DOD']['name']?></option>
                    <option class="6" value="<?=$url['GOATS']['ind']?>"><?=$url['GOATS']['name']?></option>
                    <option class="6" value="<?=$url['HRATS']['ind']?>"><?=$url['HRATS']['name']?></option>
                    <option class="6" value="<?=$url['NWTA']['ind']?>"><?=$url['NWTA']['name']?></option>
                    <option class="6" value="<?=$url['RVMBA']['ind']?>"><?=$url['RVMBA']['name']?></option>
                    <option class="6" value="<?=$url['SATA']['ind']?>"><?=$url['SATA']['name']?></option>
                    <option class="6" value="<?=$url['Team Dirt']['ind']?>"><?=$url['Team Dirt']['name']?></option>
                <option class="6" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Oregon Retailer -->
                <option class="7" value="99">Please Select</option>
                    <option class="7" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Blue Mountain Singletrack Trails Club (BMSTC)'?>">Blue Mountain Singletrack Trails Club (BMSTC)</option>
                    <option class="7" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Disciples of Dirt (DOD)'?>">Disciples of Dirt (DOD)</option>
                    <option class="7" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Greater Oakridge Area Trail Stewards (GOATS)'?>">Greater Oakridge Area Trail Stewards (GOATS)</option>
                    <option class="7" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Hood River Area Trail Stewards (HRATS)'?>">Hood River Area Trail Stewards (HRATS)</option>
                    <option class="7" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Northwest Trail Alliance (NWTA)'?>">Northwest Trail Alliance (NWTA)</option>
                    <option class="7" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Rogue Valley Mountain Bike Association (RVMBA)'?>">Rogue Valley Mountain Bike Association (RVMBA)</option>
                    <option class="7" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Salem Area Trail Alliance (SATA)'?>">Salem Area Trail Alliance (SATA)</option>
                    <option class="7" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Team Dirt'?>">Team Dirt</option>
                <option class="7" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Pennsylvania -->
                <option class="50" value="99">Please Select</option>
                    <option class="50" value="<?=$url['AMP']['ind']?>"><?=$url['AMP']['name']?></option>
                    <option class="50" value="<?=$url['BEMBA']['ind']?>"><?=$url['BEMBA']['name']?></option>
                    <option class="50" value="<?=$url['BAMBA-PA']['fam']?>"><?=$url['BAMBA-PA']['name']?></option>
                    <option class="50" value="<?=$url['DTS']['fam']?>"><?=$url['DTS']['name']?></option>
                    <option class="50" value="<?=$url['NAMBA']['ind']?>"><?=$url['NAMBA']['name']?></option>
                    <option class="50" value="<?=$url['PT']['ind']?>"><?=$url['PT']['name']?></option>
                    <option class="50" value="<?=$url['SEPTR']['ind']?>"><?=$url['SEPTR']['name']?></option>
                    <option class="50" value="<?=$url['SAMBA']['fam']?>"><?=$url['SAMBA']['name']?></option>
                    <option class="50" value="<?=$url['SVVC']['ind']?>"><?=$url['SVVC']['name']?></option>
			    	<option class="50" value="<?=$url['TP']['ind']?>"><?=$url['TP']['name']?></option>
                    <option class="50" value="<?=$url['VMB']['ind']?>"><?=$url['VMB']['name']?></option>
                <option class="50" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Pennsylvania Retailer -->
                <option class="51" value="99">Please Select</option>
                    <option class="51" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Anthracite Mountain Pedalers (AMP)'?>">Anthracite Mountain Pedalers (AMP)</option>
                    <option class="51" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Bald Eagle Mountain Bike Association (BEMBA)'?>">Bald Eagle Mountain Bike Association (BEMBA)</option>
                    <option class="51" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Berks Area Mountain Biking Association (BAMBA)'?>">Berks Area Mountain Biking Association (BAMBA)</option>
                    <option class="51" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Delaware Trail Spinners (DTS)'?>">Delaware Trail Spinners (DTS)</option>
                    <option class="51" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Northern Allegheny Mountain Bike Association (NAMBA)'?>">Northern Allegheny Mountain Bike Association (NAMBA)</option>
                    <option class="51" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Pocahontas Trails (PT)'?>">Pocahontas Trails (PT)</option>
                    <option class="51" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Southeastern Pennsylvania Trail Riders (SEPTR)'?>">Southeastern Pennsylvania Trail Riders (SEPTR)</option>
                    <option class="51" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Susquehanna Area Mountain Bike Association (SAMBA)'?>">Susquehanna Area Mountain Bike Association (SAMBA)</option>
                    <option class="51" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Susquehanna Valley Velo Club (SVVC)'?>">Susquehanna Valley Velo Club (SVVC)</option>
                    <option class="51" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Valley Mountain Bikers (VMB)'?>">Valley Mountain Bikers (VMB)</option>
					<option class="51" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Trail Pittsburgh'?>">Trail Pittsburgh</option>
                <option class="51" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- South Carolina -->
                <option class="24" value="99">Please Select</option>
                    <option class="24" value="<?=$url['CSRA']['ind']?>"><?=$url['CSRA']['name']?></option>
                    <option class="24" value="<?=$url['Cape Fear SORBA']['ind']?>"><?=$url['Cape Fear SORBA']['name']?></option>
                    <option class="24" value="<?=$sorba_ind_url . '&custom_76=Southeast&custom_77=Gainesville SORBA'?>">Gainesville SORBA</option>
                    <option class="24" value="<?=$url['Midlands SORBA']['ind']?>"><?=$url['Midlands SORBA']['name']?></option>
                    <option class="24" value="<?=$url['Upstate SORBA']['ind']?>"><?=$url['Upstate SORBA']['name']?></option>
                <option class="24" value="<?=$sorba_ind_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- South Carolina Retailer -->
                <option class="25" value="99">Please Select</option>
                    <option class="25" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Augusta-GA and Aiken-SC (CSRA)'?>">Augusta-GA and Aiken-SC (CSRA)</option>
                    <option class="25" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Cape Fear SORBA'?>">Cape Fear SORBA</option>
                    <option class="25" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Gainesville SORBA'?>">Gainesville SORBA</option>
                    <option class="25" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Midlands SORBA'?>">Midlands SORBA</option>
                    <option class="25" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Upstate SORBA'?>">Upstate SORBA</option>
                <option class="25" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- Tennessee -->
                <option class="0" value="99">Please Select</option>
                    <option class="0" value="<?=$url['AMBC SORBA']['ind']?>"><?=$url['AMBC SORBA']['name']?></option>
                    <option class="0" value="<?=$url['NMTA']['ind']?>"><?=$url['NMTA']['name']?></option>
                    <option class="0" value="<?=$url['CASA']['ind']?>"><?=$url['CASA']['name']?></option>
                    <option class="0" value="<?=$url['SORBA Middle Tennessee']['ind']?>"><?=$url['SORBA Middle Tennessee']['name']?></option>
                    <option class="0" value="<?=$url['SORBA Tri-Cities']['ind']?>"><?=$url['SORBA Tri-Cities']['name']?></option>
                <option class="0" value="<?=$sorba_ind_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- Tennessee Retailer -->
                <option class="90" value="99">Please Select</option>
                    <option class="90" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Appalachian Mountain Bike Club (AMBC SORBA)'?>">Appalachian Mountain Bike Club (AMBC SORBA)</option>
                    <option class="90" value="<?=$retail_url . '&custom_76=Southeast&custom_77=North Mississippi Trail Alliance (NMTA)'?>">North Mississippi Trail Alliance (NMTA)</option>
                    <option class="90" value="<?=$retail_url . '&custom_76=Southeast&custom_77=SORBA Chattanooga (CASA)'?>">SORBA Chattanooga (CASA)</option>
                    <option class="90" value="<?=$retail_url . '&custom_76=Southeast&custom_77=SORBA Middle Tennessee'?>">SORBA Middle Tennessee</option>
                    <option class="90" value="<?=$retail_url . '&custom_76=Southeast&custom_77=SORBA Tri-Cities'?>">SORBA Tri-Cities</option>
                <option class="90" value="<?=$retail_url . '&custom_76=Southeast&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
            <!-- Texas -->
                <option class="68" value="99">Please Select</option>
                    <option class="68" value="<?=$url['ARR']['ind']?>"><?=$url['ARR']['name']?></option>
                    <option class="68" value="<?=$url['BMBA']['ind']?>"><?=$url['BMBA']['name']?></option>
                    <option class="68" value="<?=$url['ETXTA']['ind']?>"><?=$url['ETXTA']['name']?></option>
                    <option class="68" value="<?=$url['WMBC']['ind']?>"><?=$url['WMBC']['name']?></option>
                <option class="68" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Texas Retailer -->
                <option class="69" value="99">Please Select</option>
                    <option class="69" value="<?=$retail_url . '&custom_76=South Central&custom_77=Austin Ridge Riders Mountain Bike Club (ARR)'?>">Austin Ridge Riders Mountain Bike Club (ARR)</option>
                    <option class="69" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Borderland Mountain Bike Association (BMBA)'?>">Borderland Mountain Bike Association (BMBA)</option>
                    <option class="69" value="<?=$retail_url . '&custom_76=South Central&custom_77=East Texas Trail Advocacy (ETXTA)'?>">East Texas Trail Advocacy (ETXTA)</option>
                    <option class="69" value="<?=$retail_url . '&custom_76=South Central&custom_77=Weatherford Mountain Bike Club (WMBC)'?>">Weatherford Mountain Bike Club (WMBC)</option>
                <option class="69" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Utah -->
                <option class="52" value="99">Please Select</option>
                    <option class="52" value="<?=$url['DMBTA']['ind']?>"><?=$url['DMBTA']['name']?></option>
                    <option class="52" value="<?=$url['MMBA']['ind']?>"><?=$url['MMBA']['name']?></option>
                    <option class="52" value="<?=$url['NUMB']['ind']?>"><?=$url['NUMB']['name']?></option>
                <option class="52" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Utah Retailer -->
                <option class="53" value="99">Please Select</option>
                    <option class="53" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Dixie Mountain Bike Trails Association (DMBTA)'?>">Dixie Mountain Bike Trails Association (DMBTA)</option>
                    <option class="53" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Moab Mountain Bike Association (MMBA)'?>">Moab Mountain Bike Association (MMBA)</option>
                    <option class="53" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Northeastern Utah Mountain Bikers (NUMB)'?>">Northeastern Utah Mountain Bikers (NUMB)</option>
                <option class="53" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Virginia -->
                <option class="26" value="99">Please Select</option>
                    <option class="26" value="<?=$url['CAMBC']['ind']?>"><?=$url['CAMBC']['name']?></option>
                    <option class="26" value="<?=$url['FATMUG']['ind']?>"><?=$url['FATMUG']['name']?></option>
                    <option class="26" value="<?=$url['GLOC']['ind']?>"><?=$url['GLOC']['name']?></option>
                    <option class="26" value="<?=$url['MORE']['ind']?>"><?=$url['MORE']['name']?></option>
                    <option class="26" value="<?=$url['RA-MORE']['ind']?>"><?=$url['RA-MORE']['name']?></option>
                    <option class="26" value="<?=$url['RIMBA']['ind']?>"><?=$url['RIMBA']['name']?></option>
                    <option class="26" value="<?=$url['SVMBA']['ind']?>"><?=$url['SVMBA']['name']?></option>
                <option class="26" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Virginia Retailer -->
                <option class="27" value="99">Please Select</option>
                    <option class="27" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Charlottesville Area Mountain Bike Club (CAMBC)'?>">Charlottesville Area Mountain Bike Club (CAMBC)</option>
                    <option class="27" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Fredericksburg Area Trail Management and User Group (FATMUG)'?>">Fredericksburg Area Trail Management and User Group (FATMUG)</option>
                    <option class="27" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Greater Lynchburg Off-Road Cyclists (GLOC)'?>">Greater Lynchburg Off-Road Cyclists (GLOC)</option>
                    <option class="27" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Mid-Atlantic Off-Road Enthusiasts (MORE)'?>">Mid-Atlantic Off-Road Enthusiasts (MORE)</option>
                    <option class="27" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=RVA MORE'?>">RVA MORE</option>
                    <option class="27" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Roanoke IMBA (RIMBA)'?>">Roanoke IMBA (RIMBA)</option>
                    <option class="27" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Southern Virginia Mountain Bike Association (SVMBA)'?>">Southern Virginia Mountain Bike Association (SVMBA)</option>
                <option class="27" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Washington -->
                <option class="8" value="99">Please Select</option>
                    <option class="8" value="<?=$url['FTR']['ind']?>"><?=$url['FTR']['name']?></option>
                    <option class="8" value="<?=$url['HRATS']['ind']?>"><?=$url['HRATS']['name']?></option>
                    <option class="8" value="<?=$url['NWTA']['ind']?>"><?=$url['NWTA']['name']?></option>
                <option class="8" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Washington Retailer -->
                <option class="9" value="99">Please Select</option>
                    <option class="9" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Fidalgo Trail Riders (FTR)'?>">Fidalgo Trail Riders (FTR)</option>
                    <option class="9" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Hood River Area Trail Stewards (HRATS)'?>">Hood River Area Trail Stewards (HRATS)</option>
                    <option class="9" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Northwest Trail Alliance (NWTA)'?>">Northwest Trail Alliance (NWTA)</option>
                <option class="9" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- West Virginia -->
                <option class="58" value="99">Please Select</option>
                    <option class="58" value="<?=$url['BBA']['ind']?>"><?=$url['BBA']['name']?></option>
                    <option class="58" value="<?=$url['NRBU']['ind']?>"><?=$url['NRBU']['name']?></option>
                    <option class="58" value="<?=$url['PT']['ind']?>"><?=$url['PT']['name']?></option>
                <option class="58" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- West Virginia Retailer -->
                <option class="59" value="99">Please Select</option>
					<option class="59" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Blackwater Bicycle Association (BBA)'?>">Blackwater Bicycle Association (BBA)</option>
                    <option class="59" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=New River Bicycle Union (NRBU)'?>">New River Bicycle Union (NRBU)</option>
                    <option class="59" value="<?=$retail_url . '&custom_76=Atlantic&custom_77=Pocahontas Trails (PT)'?>">Pocahontas Trails (PT)</option>
                <option class="59" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Wisconsin -->
                <option class="36" value="99">Please Select</option>
                    <option class="36" value="<?=$url['CORP']['ind']?>"><?=$url['CORP']['name']?></option>
                    <option class="36" value="<?=$url['CWOCC']['ind']?>"><?=$url['CWOCC']['name']?></option>
                    <option class="36" value="<?=$url['CAMBA']['ind']?>"><?=$url['CAMBA']['name']?></option>
                    <option class="36" value="<?=$url['CORBA-WI']['ind']?>"><?=$url['CORBA-WI']['name']?></option>
    				<option class="36" value="<?=$url['GEARS']['ind']?>"><?=$url['GEARS']['name']?></option>
                    <option class="36" value="<?=$url['KORC']['ind']?>"><?=$url['KORC']['name']?></option>
                    <option class="36" value="<?=$url['Metro']['ind']?>"><?=$url['Metro']['name']?></option>
                    <option class="36" value="<?=$url['NEWT']['ind']?>"><?=$url['NEWT']['name']?></option>
                    <option class="36" value="<?=$url['SEWTA']['ind']?>"><?=$url['SEWTA']['name']?></option>
                    <option class="36" value="<?=$url['WAMB']['ind']?>"><?=$url['WAMB']['name']?></option>
                    <option class="36" value="<?=$url['WBC']['ind']?>"><?=$url['WBC']['name']?></option>
                <option class="36" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Wisconsin Retailer -->
                <option class="37" value="99">Please Select</option>
                    <option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Capital Off Road Pathfinders (CORP)'?>">Capital Off Road Pathfinders (CORP)</option>
                    <option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Central Wisconsin Off-Road Cycling Coalition (CWOCC)'?>">Central Wisconsin Off-Road Cycling Coalition (CWOCC)</option>
                    <option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Chequamegon Area Mountain Bike Association (CAMBA)'?>">Chequamegon Area Mountain Bike Association (CAMBA)</option>
                    <option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Chippewa Off Road Bike Association (CORBA)'?>">Chippewa Off Road Bike Association (CORBA)</option>
					<option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=GEARS United'?>">GEARS United</option>
                    <option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Kinnickinnic Off-Road Cyclists (KORC)'?>">Kinnickinnic Off-Road Cyclists (KORC)</option>
                    <option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Metro Mountain Bikers, Milwaukee (Metro)'?>">Metro Mountain Bikers, Milwaukee (Metro)</option>
                    <option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=North East Wisconsin Trails (NEWT)'?>">North East Wisconsin Trails (NEWT)</option>
                    <option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Southeast Wisconsin Trails Alliance (SEWTA)'?>">Southeast Wisconsin Trails Alliance (SEWTA)</option>
                    <option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Winona Area Mountain Bikers (WAMB)'?>">Winona Area Mountain Bikers (WAMB)</option>
                    <option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Woolly Bike Club (WBC)'?>">Woolly Bike Club (WBC)</option>
                <option class="37" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Wyoming -->
                <option class="62" value="99">Please Select</option>
    				<option class="62" value="<?=$url['CWTA']['ind']?>"><?=$url['CWTA']['name']?></option>
                    <option class="62" value="<?=$url['MBT']['ind']?>"><?=$url['MBT']['name']?></option>
                    <option class="62" value="<?=$url['BMCC']['ind']?>"><?=$url['BMCC']['name']?></option>
                <option class="62" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
            <!-- Wyoming Retailer -->
                <option class="63" value="99">Please Select</option>
					<option class="63" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Central Wyoming Trails Alliance (CWTA)'?>">Central Wyoming Trails Alliance (CWTA)</option>
                    <option class="63" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Mountain Bike the Tetons (MBT)'?>">Mountain Bike the Tetons (MBT)</option>
                    <option class="63" value="<?=$retail_url . '&custom_76=Pacific Northwest&custom_77=Bomber Mountain Cycling Club (BMCC)'?>">Bomber Mountain Cycling Club (BMCC)</option>
                <option class="63" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
                  </select></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div style="clear: both;"></div>
      </div>
    </div>
    <p>&nbsp;</p>
  </div>
  <div><img src="https://www.imba.com/sites/default/files/SpringMemberDrive_hdr2.jpg" alt="Be A Link In The Chain" title="Be A Link In The Chain" style="max-width:100%;margin:0px;padding:0px;" /></div>
</div>