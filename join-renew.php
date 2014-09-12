<?php
$get_string = NULL;
$jump_url   = NULL;

function http_parse_query( $array = NULL, $convention = '%s' ){
	if( count( $array ) == 0 ){
		return '';
	} else {
		if( function_exists( 'http_build_query' ) ){
			$query = http_build_query( $array );
		} else {
			$query = '';
			foreach( $array as $key => $value ){
				if( is_array( $value ) ){
					$new_convention = sprintf( $convention, $key ) . '[%s]';
					$query .= http_parse_query( $value, $new_convention );
				} else {
					$key = urlencode( $key );
					$value = urlencode( $value );
					$query .= sprintf( $convention, $key ) . "=$value&";
				}
			}
		}
		return $query;
	}
}

if (0) {
//if (!empty($_GET)) {
	$get_string = http_parse_query($_GET);
	$get_string = '&' . $get_string;
}

// set URLs
$contribute_url = 'https://www.imba.com/civicrm/contribute/transact?reset=1&id=';
// IMBA
$retail_url		= $contribute_url . '6' . $get_string;
$promoter_url	= $contribute_url . '7' . $get_string;
$club_url		= $contribute_url . '8' . $get_string;
$patroller_url	= $contribute_url . '10' . $get_string;
$pgroup_url		= $contribute_url . '9' . $get_string;
$corp_url		= 'http://www.imba.com/membership/corporate';
$imba_ind_url	= $contribute_url . '1&custom_76=None&custom_77=Unassigned' . $get_string;
$imba_fam_url	= $contribute_url . '2&custom_76=None&custom_77=Unassigned' . $get_string;
$team_imba_url	= 'http://www.imba.com/team-imba' . $get_string;
// SORBA
$sorba_ind_url	= $contribute_url . '22' . $get_string;
$sorba_fam_url	= $contribute_url . '23' . $get_string;
// MORC
$morc_ind_url	= $contribute_url . '13' . $get_string;
$morc_fam_url	= $contribute_url . '14' . $get_string;
// MORCA
$morca_ind_url	= $contribute_url . '55' . $get_string;
$morca_fam_url	= $contribute_url . '54' . $get_string;
// DTS
$dts_ind_url	= $contribute_url . '17' . $get_string;
$dts_fam_url	= $contribute_url . '18' . $get_string;
// NWTA
$nwta_ind_url	= $contribute_url . '15' . $get_string;
$nwta_fam_url	= $contribute_url . '16' . $get_string;
// GOATS
$goats_ind_url	= $contribute_url . '21' . $get_string;
$goats_fam_url	= $contribute_url . '19' . $get_string;
// COMBA
$comba_ind_url	= $contribute_url . '41' . $get_string;
$comba_fam_url	= $contribute_url . '42' . $get_string;
// CORBA
$corba_ind_url	= $contribute_url . '53' . $get_string;
$corba_fam_url	= $contribute_url . '52' . $get_string;
// DOD
$dod_ind_url	= $contribute_url . '56' . $get_string;
$dod_fam_url	= $contribute_url . '57' . $get_string;
// CITA
$cita_ind_url	= $contribute_url . '78' . $get_string;
$cita_fam_url	= $contribute_url . '77' . $get_string;
// Copper Harbor Trails Club (CTHC)
$chtc_ind_url	= $contribute_url . '79' . $get_string;
$chtc_fam_url	= $contribute_url . '80' . $get_string;
// Santa Fe Fat Tire Society (SFFTS)
$sffts_ind_url	= $contribute_url . '81' . $get_string;
$sffts_fam_url	= $contribute_url . '82' . $get_string;
// Vail Valley Mountain Bike Association (VVMBA)
$vvmba_ind_url	= $contribute_url . '84' . $get_string;
$vvmba_fam_url	= $contribute_url . '83' . $get_string;
// Charlottesville Area Mountain Bike Club (CAMBC)
$cambc_ind_url	= $contribute_url . '85' . $get_string;
$cambc_fam_url	= $contribute_url . '86' . $get_string;
// Don't use these anymore ^^^^, use the array below VVVVV

// starting out doing this better, but haven't migrated the above
$url = array(
	'RVMBA' => array('fam'    => 88, 
					 'ind'    => 89, 
					 'region' => 'Pacific', 
					 'name'   => 'Rogue Valley Mountain Bike Association (RVMBA)'),
	'SBMTV' => array('fam'    => 90, 
					 'ind'    => 91, 
					 'region' => 'Pacific', 
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
	'GFTS'  => array('fam'    => 23, 
					 'ind'    => 22, 
					 'region' => 'SORBA', 
					 'name'   => 'Greensboro Fat Tire Society (GFTS)'),
	'NAS'   => array('fam'    => 23, 
					 'ind'    => 22, 
					 'region' => 'SORBA', 
					 'name'   => 'Nantahala Area SORBA (NAS)'),
	'SEGA'  => array('fam'    => 23, 
					 'ind'    => 22, 
					 'region' => 'SORBA', 
					 'name'   => 'Southeast Georgia SORBA (SEGA SORBA)'),
	'LASA'  => array('fam'    => 121, 
					 'ind'    => 122, 
					 'region' => 'Rockies', 
					 'name'   => 'Los Alamos Singletrack Association (LASA)'),
	'MWBA'  => array('fam'    => 123, 
					 'ind'    => 124, 
					 'region' => 'Pacific', 
					 'name'   => 'Mount Wilson Bicycling Association (MWBA)'),
	'WRBC'  => array('fam'    => 117, 
					 'ind'    => 118, 
					 'region' => 'Pacific', 
					 'name'   => 'Wood River Bicycle Coalition (WRBC)'),
	'BAMBA' => array('fam'    => 51, 
					 'ind'    => 50, 
					 'region' => 'Pacific', 
					 'name'   => 'Boise Area Mountain Bike Association (BAMBA)'),
	'CAMBA' => array('fam'    => 119, 
					 'ind'    => 120, 
					 'region' => 'Midwest', 
					 'name'   => 'Chequamegon Area Mountain Bike Association (CAMBA)'),
	'Cycle-CNY'	=> array(
					 'fam'    => 143, 
					 'ind'    => 144, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Cycle-CNY'),
	'ESIMBA'	=> array(
					 'fam'    => 131, 
					 'ind'    => 132, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Eastern Shore IMBA (ESIMBA)'),
	'FooMTB'	=> array(
					 'fam'    => 153, 
					 'ind'    => 154, 
					 'region' => 'Rockies', 
					 'name'   => 'FooMTB Trail Partners (FooMTB)'),
	'HRATS'	=> array(
					 'fam'    => 137, 
					 'ind'    => 138, 
					 'region' => 'Pacific', 
					 'name'   => 'Hood River Area Trail Stewards (HRATS)'),
	'KORC'	=> array(
					 'fam'    => 129, 
					 'ind'    => 130, 
					 'region' => 'Midwest', 
					 'name'   => 'Kinnickinnic Off-Road Cyclists (KORC)'),
	'MMBC'	=> array(
					 'fam'    => 139, 
					 'ind'    => 140, 
					 'region' => 'Pacific', 
					 'name'   => 'Maui Mountain Bike Coalition (MMBC)'),
	'Metro'	=> array(
					 'fam'    => 155, 
					 'ind'    => 156, 
					 'region' => 'Midwest', 
					 'name'   => 'Metro Mountain Bikers, Milwaukee (Metro)'),
	'NYCMTB'	=> array(
					 'fam'    => 133, 
					 'ind'    => 134, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'New York City Mountain Bike Association (NYCMTB)'),
	'NAMBA'	=> array(
					 'fam'    => 151, 
					 'ind'    => 152, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Northern Allegheny Mountain Bike Association (NAMBA)'),
	'SEPTR'	=> array(
					 'fam'    => 145, 
					 'ind'    => 146, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Southeastern Pennsylvania Trail Riders (SEPTR)'),
	'Poto MBA'	=> array(
					 'fam'    => 115, 
					 'ind'    => 116, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Potawatomi Mountain Bike Association (Poto MBA)'),
	'RIMBA'	=> array(
					 'fam'    => 147, 
					 'ind'    => 148, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Roanoke IMBA (RIMBA)'),
	'SIMBA'	=> array(
					 'fam'    => 135, 
					 'ind'    => 136, 
					 'region' => 'Pacific', 
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
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Fredericksburg Area Trail Management and User Group (FATMUG)'),
	'GMBA'	=> array(
					 'fam'    => 185, 
					 'ind'    => 186, 
					 'region' => 'Rockies', 
					 'name'   => 'Grand Mountain Bike Alliance (GMBA)'),
	'JMBA'	=> array(
					 'fam'    => 165, 
					 'ind'    => 166, 
					 'region' => 'Pacific', 
					 'name'   => 'Jefferson Mountain Bike Association (JMBA)'),
	'MVMBA'	=> array(
					 'fam'    => 161, 
					 'ind'    => 162, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Miami Valley Mountain Bike Association (MVMBA)'),
	'SMBC'	=> array(
					 'fam'    => 157, 
					 'ind'    => 158, 
					 'region' => 'Southwest', 
					 'name'   => 'Sedona Mountain Bike Club (SMBC)'),
	'SMMB'	=> array(
					 'fam'    => 167, 
					 'ind'    => 168, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Southern Maryland Mountain Biking (SMMB)'),
	'SWMMBA'	=> array(
					 'fam'    => 179, 
					 'ind'    => 180, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Southwest Michigan Mountain Bike Association (SWMMBA)'),
	'WNYMBA'	=> array(
					 'fam'    => 173, 
					 'ind'    => 174, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Western New York Mountain Bicycling Association (WNYMBA)'),
	'GT'	=> array(
					 'fam'    => 181, 
					 'ind'    => 182, 
					 'region' => 'Rockies', 
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
	'SKMCI'	=> array(
					 'fam'    => 171, 
					 'ind'    => 172, 
					 'region' => 'Midwest', 
					 'name'   => 'Southern Kettle Moraine Chapter of IMBA (SKMCI)'),
	'LAMBA'	=> array(
					 'fam'    => 199, 
					 'ind'    => 200, 
					 'region' => 'Midwest', 
					 'name'   => 'Linn Area Mountain Bike Association (LAMBA)'),
	'SHARE'	=> array(
					 'fam'    => 193, 
					 'ind'    => 194, 
					 'region' => 'Southwest', 
					 'name'   => 'SHARE Mountain Bike Club (SHARE)'),
	'Team Dirt'	=> array(
					 'fam'    => 205, 
					 'ind'    => 206, 
					 'region' => 'Pacific', 
					 'name'   => 'Team Dirt'),
	'KyMBA Louisville'	=> array(
					 'fam'    => 195, 
					 'ind'    => 196, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Kentucky Mountain Bike Association - Louisville (KyMBA Louisville)'),
	'CIMBA'	=> array(
					 'fam'    => 191, 
					 'ind'    => 192, 
					 'region' => 'Pacific', 
					 'name'   => 'Central Idaho Mountain Bike Association (CIMBA)'),
	'CAMP'	=> array(
					 'fam'    => 23, 
					 'ind'    => 22, 
					 'region' => 'SORBA', 
					 'name'   => 'Central Alabama Mountain Pedalers (CAMP)'),
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
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Berks Area Mountain Biking Association (BAMBA)'),
	'CCCMB'	=> array(
					 'fam'    => 209, 
					 'ind'    => 209, 
					 'region' => 'Southwest', 
					 'name'   => 'Central Coast Concerned Mountain Bikers (CCCMB)'),
	'IDYLLWILD'	=> array(
					 'fam'    => 211, 
					 'ind'    => 211, 
					 'region' => 'Southwest', 
					 'name'   => 'Idyllwild Cycling'),
	'SKYMBA'	=> array(
					 'fam'    => 212, 
					 'ind'    => 212, 
					 'region' => 'Great Lakes', 
					 'name'   => 'Southwest Kentucky Mountain Bike Association (SKyMBA)'),
	'SAMBA'	=> array(
					 'fam'    => 218, 
					 'ind'    => 218, 
					 'region' => 'Mid-Atlantic', 
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
					 'region' => 'Rockies', 
					 'name'   => 'Routt County Riders (RCR)'),
	'MSMBA'	=> array(
					 'fam'    => 213, 
					 'ind'    => 213, 
					 'region' => 'Pacific', 
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
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'New River Bicycle Union (NRBU)'),
	'SFTS'	=> array(
					 'fam'    => 230, 
					 'ind'    => 230, 
					 'region' => 'Rockies', 
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
					 'region' => 'Pacific', 
					 'name'   => 'Fidalgo Trail Riders (FTR)'),
	'FCBC'	=> array(
					 'fam'    => 233, 
					 'ind'    => 233, 
					 'region' => 'Northeast', 
					 'name'   => 'Fats In The Cats (FCBC)'),
	'CILTA'	=> array(
					 'fam'    => 234, 
					 'ind'    => 234, 
					 'region' => 'Midwest', 
					 'name'   => 'Central Illinois Trails Association (CILTA)'),
	'SDMBA'	=> array(
					 'fam'    => 232, 
					 'ind'    => 232, 
					 'region' => 'Southwest', 
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
					 'region' => 'Northern California', 
					 'name'   => 'Groveland Trail Heads (GTH)'),
	'MORE'	=> array(
					 'fam'    => 239, 
					 'ind'    => 239, 
					 'region' => 'Mid-Atlantic', 
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
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Pocahontas Trails (PT)'),
	'RA-MORE'	=> array(
					 'fam'    => 242, 
					 'ind'    => 242, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Richmond Mid-Atlantic Off Road Enthusiasts (RA-MORE)'),
	'WAMB'	=> array(
					 'fam'    => 243, 
					 'ind'    => 243, 
					 'region' => 'Midwest', 
					 'name'   => 'Winona Area Mountain Bikers (WAMB)'),
	'FATRAC'	=> array(
					 'fam'    => 245, 
					 'ind'    => 245, 
					 'region' => 'Northern California', 
					 'name'   => 'Folsom Auburn Trail Riders Action Coalition (FATRAC)'),
	'MMBA'	=> array(
					 'fam'    => 246, 
					 'ind'    => 246, 
					 'region' => 'Southwest', 
					 'name'   => 'Moab Mountain Bike Association (MMBA)'),
	'MBoSC'	=> array(
					 'fam'    => 247, 
					 'ind'    => 247, 
					 'region' => 'Southwest', 
					 'name'   => 'Mountain Bikers of Santa Cruz (MBoSC)'),
	'BMSTC'	=> array(
					 'fam'    => 248, 
					 'ind'    => 248, 
					 'region' => 'Pacific', 
					 'name'   => 'Blue Mountain Singletrack Trails Club (BMSTC)'),
	'SATA'	=> array(
					 'fam'    => 249, 
					 'ind'    => 249, 
					 'region' => 'Pacific', 
					 'name'   => 'Salem Area Trail Alliance (SATA)'),
	'SVMTB'	=> array(
					 'fam'    => 250, 
					 'ind'    => 250, 
					 'region' => 'Pacific', 
					 'name'   => 'Silicon Valley Mountain Bikers (SVMTB)'),
	'OMTBO'	=> array(
					 'fam'    => 251, 
					 'ind'    => 251, 
					 'region' => 'Pacific', 
					 'name'   => 'Oahu Mountain Bike Ohana (OMTBO)'),
	'BMBA'	=> array(
					 'fam'    => 265, 
					 'ind'    => 265, 
					 'region' => 'None', 
					 'name'   => 'Borderland Mountain Bike Association (BMBA)'),
	'RFMBA'	=> array(
					 'fam'    => 266, 
					 'ind'    => 266, 
					 'region' => 'Rockies', 
					 'name'   => 'Roaring Fork Mountain Bike Association (RFMBA)'),
	'OORC'	=> array(
					 'fam'    => 267, 
					 'ind'    => 267, 
					 'region' => 'South Central', 
					 'name'   => 'Ozark Off Road Cyclists (OORC)'),
	'AMP'	=> array(
					 'fam'    => 268, 
					 'ind'    => 268, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Anthracite Mountain Pedalers (AMP)'),
	'LCTC'	=> array(
					 'fam'    => 269, 
					 'ind'    => 269, 
					 'region' => 'Northern California', 
					 'name'   => 'Lake County Trails Coalition (LCTC)'),
	'GROC'	=> array(
					 'fam'    => 270, 
					 'ind'    => 270, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Genesee Regional Off-Road Cyclists (GROC)'),
	'CCORC'	=> array(
					 'fam'    => 271, 
					 'ind'    => 271, 
					 'region' => 'Northern California', 
					 'name'   => 'Central California Off Road Cyclists (CCORC)'),
	'GLOC'	=> array(
					 'fam'    => 272, 
					 'ind'    => 272, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Greater Lynchburg Off-Road Cyclists (GLOC)'),
	'MWTA'	=> array(
					 'fam'    => 273, 
					 'ind'    => 273, 
					 'region' => 'Colorado-Wyoming', 
					 'name'   => 'Medicine Wheel Trail Advocates (MWTA)'),
	'CAMBA-NY'	=> array(
					 'fam'    => 274, 
					 'ind'    => 274, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Central Adirondack Mountain Bike Assocation (CAMBA)'),
	'MORC-MO'	=> array(
					 'fam'    => 275, 
					 'ind'    => 275, 
					 'region' => 'South Central', 
					 'name'   => 'Midwest Off Road Cyclists (MORC)'),
	'BEMBA'	=> array(
					 'fam'    => 276, 
					 'ind'    => 276, 
					 'region' => 'Mid-Atlantic', 
					 'name'   => 'Bald Eagle Mountain Bike Association (BEMBA)'),
	'CATA'	=> array(
					 'fam'    => 277, 
					 'ind'    => 277, 
					 'region' => 'South Central', 
					 'name'   => 'Central Arkansas Trail Alliance (CATA)'),
	'BBC'	=> array(
					 'fam'    => 289, 
					 'ind'    => 289, 
					 'region' => 'None', 
					 'name'   => 'Bitterroot Backcountry Cyclists (BBC)'),
	'BONC'	=> array(
					 'fam'    => 290, 
					 'ind'    => 290, 
					 'region' => 'Northern California', 
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
					 'region' => 'Northern California', 
					 'name'   => 'Redwood Coast Mountain Bike Association (RCMBA)'),
	'RAMBA'	=> array(
					 'fam'    => 295, 
					 'ind'    => 295, 
					 'region' => 'Midwest', 
					 'name'   => 'Range Area Mountain Bike Association (RAMBA)'),
  	'CROCT'	=> array(
					 'fam'    => 298,
					 'ind'    => 298,
					 'region' => 'Midwest',
					 'name'   => 'Cannon River Offroad Cycling and Trails (CROCT)'),
	'SMBC-CO'	=> array(
					 'fam'    => 299,
					 'ind'    => 299,
					 'region' => 'Colorado-Wyoming',
					 'name'   => 'Silverton Mountain Bike Club (SMBC)'),
	'PU'	=> array(
					 'fam'    => 300,
					 'ind'    => 300,
					 'region' => 'None',
					 'name'   => 'Pedal United'),
	'MCBC'	=> array(
					 'fam'    => 301,
					 'ind'    => 301,
					 'region' => 'Northern California',
					 'name'   => 'Marin County Bicycle Coalition (MCBC)'),
	'FAST'	=> array(
					 'fam'    => 302,
					 'ind'    => 302,
					 'region' => 'South Central',
					 'name'   => 'Friends At Slaughter Pen Trail (FAST)'),
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
					 'region' => 'Mid-Atlantic',
					 'name'   => 'Susquehanna Valley Velo Club (SVVC)'),
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
/*
$canada_retail_url	= $contribute_url . '29&custom_76=Canada&custom_77=Unassigned' . $get_string;
$canada_club_url	= $contribute_url . '25&custom_76=Canada&custom_77=Unassigned' . $get_string;
$canada_corp_url	= $contribute_url . '32&custom_76=Canada&custom_77=Unassigned' . $get_string;
$canada_ind_url		= $contribute_url . '24&custom_76=Canada&custom_77=Unassigned' . $get_string;
$canada_fam_url		= $contribute_url . '28&custom_76=Canada&custom_77=Unassigned' . $get_string;
*/
// allow for different urls per campaign sub-source (handle s_subsrc redirection)
/*
if (!empty($_GET['s_subsrc'])) {
	switch ($_GET['s_subsrc']) {
		case 'NPS09':
			$imba_url   = 'https://secure2.convio.net/imba/site/Donation2?df_id=1680&1680.donation=form1' . $get_string;
			$sorba_url  = 'https://secure2.convio.net/imba/site/Donation2?df_id=1700&1700.donation=form1' . $get_string;
			break;
	}
}
*/

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


<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff" background="/sites/all/themes/longride/images/choose_membership_drupal.jpg">
	<tr>		
		<td class="content" width=696 height=449 valign=middle><div style="font-size:16px; padding:20px 100px 0;">
		  <p><strong>If you love mountain biking and care about the environment, you belong with IMBA.</strong> That's because supporting IMBA is the most effective way for you to build, maintain and open the trails you love to ride.</p>
		  <strong>Join those who are passionate enough to support the trails they ride on.</strong>
<p>
	<center>
		<label for="country"><strong>I live in </strong></label>
	<select name="country" id="country">
		<option value="99">Please Select</option>;
		<option value="0">the US</option>
		<option value="<?=$canada_down_url ?>">Canada</option>
		<option value="1">another country</option>
	</select>
	
	<p/>
	
	<label for="state"><strong>I am a </strong></label>
	<select name="type" id="type">
<!-- US > Type? -->
		<option class="0" value="99">Please Select</option>;
		<option class="0" value="0">Individual or Family</option>
		<option class="0" value="88">Retailer</option>
		<option class="0" value="<?=$club_url?>">Club/Organization</option>
		<option class="0" value="<?=$corp_url?>">Corporate Sponsor</option>
		<option class="0" value="<?=$patroller_url?>">NMBP Patroller</option>
		<option class="0" value="<?=$pgroup_url?>">NMBP Patrol Group</option>
<!-- International > Type? -->
		<option class="1" value="99">Please Select</option>;
		<option class="1" value="<?=$imba_ind_url?>">Individual or Family</option>
		<option class="1" value="<?=$retail_url?>">Retailer</option>
		<option class="1" value="<?=$club_url?>">Club/Organization</option>
		<option class="1" value="<?=$corp_url?>">Corporate Sponsor</option>
		<option class="1" value="<?=$pgroup_url?>">Patrol Group</option>
	</select>
	<p/>
	
	<label for="state"><strong>My state or territory is </strong></label>
	<select name="state" id="state">
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
			case 'MS':
				$jump_url = $sorba_ind_url . '&custom_76=SORBA&custom_77=Unassigned';
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
			case 'MS':
				$jump_url = $retail_url . '&custom_76=SORBA&custom_77=Unassigned';
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
			default:
				$jump_url = $retail_url;
		}
		print "\t" . '<option class="88" value="' . $jump_url . '"' . '>' . $value . '</option>' . "\n";
	}
	?>
	</select>
	<p/>
	
	<label for="chapter"><strong>My local Chapter is </strong></label>
	<select name="chapter" id="chapter">
<!-- Alabama -->
		<option class="12" value="99">Please Select</option>
		<option class="12" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Birmingham Urban Mountain Pedalers (BUMP)'?>">Birmingham Urban Mountain Pedalers (BUMP)</option>
		<option class="12" value="<?=$url['CAMP']['ind']?>"><?=$url['CAMP']['name']?></option>
		<option class="12" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=SORBA Huntsville'?>">SORBA Huntsville</option>
		<option class="12" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Chattahoochee Valley Area SORBA (CVA)'?>">Chattahoochee Valley Area SORBA (CVA)</option>
		<option class="12" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Northeast Alabama Bicycle Association (NEABA)'?>">Northeast Alabama Bicycle Association (NEABA)</option>
		<option class="12" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=South Alabama Mountain Bike Association (SAMBA)'?>">South Alabama Mountain Bike Association (SAMBA)</option>
		<option class="12" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Southeast Alabama Mountain Bikers (SAM-SORBA)'?>">Southeast Alabama Mountain Bikers (SAM-SORBA)</option>
		<option class="12" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=West Alabama Mountain Biking Association (WAMBA)'?>">West Alabama Mountain Biking Association (WAMBA)</option>
		<option class="12" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
<!-- Alabama Retailer -->
		<option class="13" value="99">Please Select</option>
		<option class="13" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Birmingham Urban Mountain Pedalers (BUMP)'?>">Birmingham Urban Mountain Pedalers (BUMP)</option>
		<option class="13" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Central Alabama Mountain Pedalers (CAMP)'?>">Central Alabama Mountain Pedalers (CAMP)</option>
		<option class="13" value="<?=$retail_url . '&custom_76=SORBA&custom_77=SORBA Huntsville'?>">SORBA Huntsville</option>
		<option class="13" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Chattahoochee Valley Area SORBA (CVA)'?>">Chattahoochee Valley Area SORBA (CVA)</option>
		<option class="13" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Northeast Alabama Bicycle Association (NEABA)'?>">Northeast Alabama Bicycle Association (NEABA)</option>
		<option class="13" value="<?=$retail_url . '&custom_76=SORBA&custom_77=South Alabama Mountain Bike Association (SAMBA)'?>">South Alabama Mountain Bike Association (SAMBA)</option>
		<option class="13" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Southeast Alabama Mountain Bikers (SAM-SORBA)'?>">Southeast Alabama Mountain Bikers (SAM-SORBA)</option>
		<option class="13" value="<?=$retail_url . '&custom_76=SORBA&custom_77=West Alabama Mountain Biking Association (WAMBA)'?>">West Alabama Mountain Biking Association (WAMBA)</option>
		<option class="13" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
<!-- Alaska -->
<!-- Alaska Retailer -->
<!-- Arizona -->
		<option class="30" value="99">Please Select</option>
		<option class="30" value="<?=$url['CRATA']['ind']?>"><?=$url['CRATA']['name']?></option>
		<option class="30" value="<?=$url['DFMBA']['ind']?>"><?=$url['DFMBA']['name']?></option>
		<option class="30" value="<?=$url['PMBA']['ind']?>"><?=$url['PMBA']['name']?></option>
		<option class="30" value="<?=$url['SDMB']['ind']?>"><?=$url['SDMB']['name']?></option>
		<option class="30" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Arizona Retailer -->
		<option class="31" value="99">Please Select</option>
		<option class="31" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Colorado River Area Trail Alliance (CRATA)'?>">Colorado River Area Trail Alliance (CRATA)</option>
		<option class="31" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Desert Foothills Mountain Bike Association (DFMBA)'?>">Desert Foothills Mountain Bike Association (DFMBA)</option>
		<option class="31" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Prescott Mountain Bike Alliance (PMBA)'?>">Prescott Mountain Bike Alliance (PMBA)</option>
		<option class="31" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Sonoran Desert Mountain Bicyclists (SDMB)'?>">Sonoran Desert Mountain Bicyclists (SDMB)</option>
		<option class="31" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Arkansas -->
		<option class="66" value="99">Please Select</option>
		<option class="66" value="<?=$url['CATA']['ind']?>"><?=$url['CATA']['name']?></option>
		<option class="66" value="<?=$url['FAST']['ind']?>"><?=$url['FAST']['name']?></option>
		<option class="66" value="<?=$url['OORC']['ind']?>"><?=$url['OORC']['name']?></option>
		<option class="66" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Arkansas Retailer -->
		<option class="67" value="99">Please Select</option>
		<option class="67" value="<?=$retail_url . '&custom_76=South Central&custom_77=Central Arkansas Trail Alliance (CATA)'?>">Central Arkansas Trail Alliance (CATA)</option>
		<option class="67" value="<?=$retail_url . '&custom_76=South Central&custom_77=Friends At Slaughter Pen Trail (FAST)'?>">Friends At Slaughter Pen Trail (FAST)</option>
		<option class="67" value="<?=$retail_url . '&custom_76=South Central&custom_77=Ozark Off Road Cyclists (OORC)'?>">Ozark Off Road Cyclists (OORC)</option>
		<option class="67" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- California -->
		<option class="16" value="99">Please Select</option>
		<option class="16" value="<?=$url['BONC']['ind']?>"><?=$url['BONC']['name']?></option>
		<option class="16" value="<?=$url['CCORC']['ind']?>"><?=$url['CCORC']['name']?></option>
		<option class="16" value="<?=$url['CCCMB']['ind']?>"><?=$url['CCCMB']['name']?></option>
		<option class="16" value="<?=$corba_ind_url?>">Concerned Off-Road Bicyclists Association (CORBA)</option>
		<option class="16" value="<?=$url['CRATA']['ind']?>"><?=$url['CRATA']['name']?></option>
		<option class="16" value="<?=$url['FATRAC']['ind']?>"><?=$url['FATRAC']['name']?></option>
		<option class="16" value="<?=$url['GTH']['ind']?>"><?=$url['GTH']['name']?></option>
		<option class="16" value="<?=$url['IDYLLWILD']['fam']?>"><?=$url['IDYLLWILD']['name']?></option>
		<option class="16" value="<?=$url['JMBA']['ind']?>"><?=$url['JMBA']['name']?></option>
		<option class="16" value="<?=$url['LCTC']['ind']?>"><?=$url['LCTC']['name']?></option>
		<option class="16" value="<?=$url['MCBC']['ind']?>"><?=$url['MCBC']['name']?></option>
		<option class="16" value="<?=$morca_ind_url?>">Monterey Off Road Cycling Association (MORCA)</option>
		<option class="16" value="<?=$url['MSMBA']['ind']?>"><?=$url['MSMBA']['name']?></option>
		<option class="16" value="<?=$url['MBoSC']['ind']?>"><?=$url['MBoSC']['name']?></option>
		<option class="16" value="<?=$url['MWBA']['ind']?>"><?=$url['MWBA']['name']?></option>
		<option class="16" value="<?=$url['RCMBA']['ind']?>"><?=$url['RCMBA']['name']?></option>
		<option class="16" value="<?=$url['SDMBA']['ind']?>"><?=$url['SDMBA']['name']?></option>
		<option class="16" value="<?=$url['SBMTV']['ind']?>"><?=$url['SBMTV']['name']?></option>
		<option class="16" value="<?=$url['SHARE']['ind']?>"><?=$url['SHARE']['name']?></option>
		<option class="16" value="<?=$url['SVMTB']['ind']?>"><?=$url['SVMTB']['name']?></option>
		<option class="16" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- California Retailer -->
		<option class="17" value="99">Please Select</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Northern California&custom_77=Bicyclists of Nevada County (BONC)'?>">Bicyclists of Nevada County (BONC)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Northern California&custom_77=Central California Off Road Cyclists (CCORC)'?>">Central California Off Road Cyclists (CCORC)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Central Coast Concerned Mountain Bikers (CCCMB)'?>">Central Coast Concerned Mountain Bikers (CCCMB)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Concerned Off-Road Bicyclists Association (CORBA)'?>">Concerned Off-Road Bicyclists Association (CORBA)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Colorado River Area Trail Alliance (CRATA)'?>">Colorado River Area Trail Alliance (CRATA)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Northern California&custom_77=Folsom Auburn Trail Riders Action Coalition (FATRAC)'?>">Folsom Auburn Trail Riders Action Coalition (FATRAC)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Northern California&custom_77=Groveland Trail Heads (GTH)'?>">Groveland Trail Heads (GTH)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Idyllwild Cycling'?>">Idyllwild Cycling</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Jefferson Mountain Bike Association (JMBA)'?>">Jefferson Mountain Bike Association (JMBA)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Northern California&custom_77=Lake County Trails Coalition (LCTC)'?>">Lake County Trails Coalition (LCTC)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Northern California&custom_77=Marin County Bicycle Coalition (MCBC)'?>">Marin County Bicycle Coalition (MCBC)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Northern California&custom_77=Monterey Off Road Cycling Association (MORCA)'?>">Monterey Off Road Cycling Association (MORCA)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Mount Shasta Mountain Bike Association (MSMBA)'?>">Mount Shasta Mountain Bike Association (MSMBA)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Mountain Bikers of Santa Cruz (MBoSC)'?>">Mountain Bikers of Santa Cruz (MBoSC)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Mount Wilson Bicycling Association (MWBA)'?>">Mount Wilson Bicycling Association (MWBA)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Redwood Coast Mountain Bike Association (RCMBA)'?>">Redwood Coast Mountain Bike Association (RCMBA)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Southwest&custom_77=San Diego Mountain Biking Association (SDMBA)'?>">San Diego Mountain Biking Association (SDMBA)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Santa Barbara Mountain Bike Trail Volunteers (SBMTV)'?>">Santa Barbara Mountain Bike Trail Volunteers (SBMTV)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Southwest&custom_77=SHARE Mountain Bike Club (SHARE)'?>">SHARE Mountain Bike Club (SHARE)</option>
		<option class="17" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Silicon Valley Mountain Bikers (SVMTB)'?>">Silicon Valley Mountain Bikers (SVMTB)</option>
		<option class="17" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Colorado -->
		<option class="14" value="99">Please Select</option>
		<option class="14" value="<?=$url['CCW']['ind']?>"><?=$url['CCW']['name']?></option>
		<option class="14" value="<?=$comba_ind_url?>">Colorado Mountain Bike Association (COMBA)</option>
		<option class="14" value="<?=$url['GMBA']['ind']?>"><?=$url['GMBA']['name']?></option>
		<option class="14" value="<?=$url['MWTA']['ind']?>"><?=$url['MWTA']['name']?></option>
		<option class="14" value="<?=$url['RFMBA']['ind']?>"><?=$url['RFMBA']['name']?></option>
		<option class="14" value="<?=$url['RCR']['ind']?>"><?=$url['RCR']['name']?></option>
    	<option class="14" value="<?=$url['SMBC-CO']['ind']?>"><?=$url['SMBC-CO']['name']?></option>
		<option class="14" value="<?=$url['SFTS']['ind']?>"><?=$url['SFTS']['name']?></option>
		<option class="14" value="<?=$vvmba_ind_url?>">Vail Valley Mountain Bike Association (VVMBA)</option>
		<option class="14" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Colorado Retailer -->
		<option class="15" value="99">Please Select</option>
		<option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Cloud City Wheelers (CCW)'?>">Cloud City Wheelers (CCW)</option>
		<option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Colorado Mountain Bike Association (COMBA)'?>">Colorado Mountain Bike Association (COMBA)</option>
		<option class="15" value="<?=$retail_url . '&custom_76=Rockies&custom_77=Grand Mountain Bike Alliance (GMBA)'?>">Grand Mountain Bike Alliance (GMBA)</option>
		<option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Medicine Wheel Trail Advocates (MWTA)'?>">Medicine Wheel Trail Advocates (MWTA)</option>
		<option class="15" value="<?=$retail_url . '&custom_76=Rockies&custom_77=Roaring Fork Mountain Bike Association (RFMBA)'?>">Roaring Fork Mountain Bike Association (RFMBA)</option>
		<option class="15" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Silverton Mountain Bike Club (SMBC)'?>">Silverton Mountain Bike Club (SMBC)</option>
		<option class="15" value="<?=$retail_url . '&custom_76=Rockies&custom_77=Routt County Riders (RCR)'?>">Routt County Riders (RCR)</option>
		<option class="15" value="<?=$retail_url . '&custom_76=Rockies&custom_77=Summit Fat Tire Society (SFTS)'?>">Summit Fat Tire Society (SFTS)</option>
		<option class="15" value="<?=$retail_url . '&custom_76=Rockies&custom_77=Vail Valley Mountain Bike Association (VVMBA)'?>">Vail Valley Mountain Bike Association (VVMBA)</option>
		<option class="15" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Delaware -->
		<option class="4" value="99">Please Select</option>
		<option class="4" value="<?=$dts_ind_url?>">Delaware Trail Spinners (DTS)</option>
		<option class="4" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Delaware Retailer -->
		<option class="5" value="99">Please Select</option>
		<option class="5" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Delaware Trail Spinners (DTS)'?>">Delaware Trail Spinners (DTS)</option>
		<option class="5" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- District of Columbia -->
		<option class="64" value="99">Please Select</option>
		<option class="64" value="<?=$url['MORE']['ind']?>"><?=$url['MORE']['name']?></option>
		<option class="64" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- District of Columbia Retailer -->
		<option class="65" value="99">Please Select</option>
		<option class="65" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Mid-Atlantic Off-Road Enthusiasts (MORE)'?>">Mid-Atlantic Off-Road Enthusiasts (MORE)</option>
		<option class="65" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Flordia -->
		<option class="18" value="99">Please Select</option>
		<option class="18" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Flagler Area Biking SORBA'?>">Flagler Area Biking SORBA</option>
		<option class="18" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=SORBA Jax'?>">SORBA Jax</option>
		<option class="18" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=SORBA Orlando'?>">SORBA Orlando</option>
		<option class="18" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Tallahassee Mountain Bike Association (TMBA)'?>">Tallahassee Mountain Bike Association (TMBA)</option>
		<option class="18" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
<!-- Flordia Retailer -->
		<option class="19" value="99">Please Select</option>
		<option class="19" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Flagler Area Biking SORBA'?>">Flagler Area Biking SORBA</option>
		<option class="19" value="<?=$retail_url . '&custom_76=SORBA&custom_77=SORBA Jax'?>">SORBA Jax</option>
		<option class="19" value="<?=$retail_url . '&custom_76=SORBA&custom_77=SORBA Orlando'?>">SORBA Orlando</option>
		<option class="19" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Tallahassee Mountain Bike Association (TMBA)'?>">Tallahassee Mountain Bike Association (TMBA)</option>
		<option class="19" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
<!-- Georgia -->
		<option class="22" value="99">Please Select</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Augusta-GA and Aiken-SC (CSRA)'?>">Augusta-GA and Aiken-SC (CSRA)</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=SORBA Athens'?>">SORBA Athens</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=SORBA Atlanta'?>">SORBA Atlanta</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Ellijay Mountain Bike Association (EMBA SORBA)'?>">Ellijay Mountain Bike Association (EMBA SORBA)</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Flint River Mountain Bike Association (FRMBA)'?>">Flint River Mountain Bike Association (FRMBA)</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Gwinnett Area Trail Riders (GATR)'?>">Gwinnett Area Trail Riders (GATR)</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Chattahoochee Valley Area SORBA (CVA)'?>">Chattahoochee Valley Area SORBA (CVA)</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Ocmulgee Mountain Biking Association (OMBA Middle Georgia)'?>">Ocmulgee Mountain Biking Association (OMBA Middle Georgia)</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Northeast Georgia SORBA'?>">Northeast Georgia SORBA</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Northwest Georgia SORBA'?>">Northwest Georgia SORBA</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=SORBA West Georgia'?>">SORBA West Georgia</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Roswell Alpharetta Mountain Bike Organization (RAMBO)'?>">Roswell Alpharetta Mountain Bike Organization (RAMBO)</option>
		<option class="22" value="<?=$url['SEGA']['ind']?>"><?=$url['SEGA']['name']?></option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=SORBA Woodstock'?>">SORBA Woodstock</option>
		<option class="22" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
<!-- Georgia Retailer -->
		<option class="23" value="99">Please Select</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Augusta-GA and Aiken-SC (CSRA)'?>">Augusta-GA and Aiken-SC (CSRA)</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=SORBA Athens'?>">SORBA Athens</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=SORBA Atlanta'?>">SORBA Atlanta</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Ellijay Mountain Bike Association (EMBA SORBA)'?>">Ellijay Mountain Bike Association (EMBA SORBA)</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Flint River Mountain Bike Association (FRMBA)'?>">Flint River Mountain Bike Association (FRMBA)</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Gwinnett Area Trail Riders (GATR)'?>">Gwinnett Area Trail Riders (GATR)</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Chattahoochee Valley Area SORBA (CVA)'?>">Chattahoochee Valley Area SORBA (CVA)</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Ocmulgee Mountain Biking Association (OMBA Middle Georgia)'?>">Ocmulgee Mountain Biking Association (OMBA Middle Georgia)</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Northeast Georgia SORBA'?>">Northeast Georgia SORBA</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Northwest Georgia SORBA'?>">Northwest Georgia SORBA</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=SORBA West Georgia'?>">SORBA West Georgia</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Roswell Alpharetta Mountain Bike Organization (RAMBO)'?>">Roswell Alpharetta Mountain Bike Organization (RAMBO)</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Southeast Georgia SORBA (SEGA SORBA)'?>">Southeast Georgia SORBA (SEGA SORBA)</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=SORBA Woodstock'?>">SORBA Woodstock</option>
		<option class="23" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
<!-- Hawaii -->
		<option class="48" value="99">Please Select</option>
		<option class="48" value="<?=$url['MMBC']['ind']?>"><?=$url['MMBC']['name']?></option>
		<option class="48" value="<?=$url['OMTBO']['ind']?>"><?=$url['OMTBO']['name']?></option>
		<option class="48" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Hawaii Retailer -->
		<option class="49" value="99">Please Select</option>
		<option class="49" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Maui Mountain Bike Coalition (MMBC)'?>">Maui Mountain Bike Coalition (MMBC)</option>
		<option class="49" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Oahu Mountain Bike Ohana (OMTBO)'?>">Oahu Mountain Bike Ohana (OMTBO)</option>
		<option class="49" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Idaho -->
		<option class="42" value="99">Please Select</option>
		<option class="42" value="<?=$url['BAMBA']['ind']?>"><?=$url['BAMBA']['name']?></option>
		<option class="42" value="<?=$url['CIMBA']['ind']?>"><?=$url['CIMBA']['name']?></option>
		<option class="42" value="<?=$url['MBT']['ind']?>"><?=$url['MBT']['name']?></option>
		<option class="42" value="<?=$url['SIMBA']['ind']?>"><?=$url['SIMBA']['name']?></option>
		<option class="42" value="<?=$url['WRBC']['ind']?>"><?=$url['WRBC']['name']?></option>
		<option class="42" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Idaho Retailer -->
		<option class="43" value="99">Please Select</option>
		<option class="43" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Boise Area Mountain Bike Association (BAMBA)'?>">Boise Area Mountain Bike Association (BAMBA)</option>
		<option class="43" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Central Idaho Mountain Bike Association (CIMBA)'?>">Central Idaho Mountain Bike Association (CIMBA)</option>
		<option class="43" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Mountain Bike the Tetons (MBT)'?>">Mountain Bike the Tetons (MBT)</option>
		<option class="43" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Southern Idaho Mountain Biking Association (SIMBA)'?>">Southern Idaho Mountain Biking Association (SIMBA)</option>
		<option class="43" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Wood River Bicycle Coalition (WRBC)'?>">Wood River Bicycle Coalition (WRBC)</option>
		<option class="43" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Indiana -->
		<option class="38" value="99">Please Select</option>
		<option class="38" value="<?=$url['EMBA']['ind']?>"><?=$url['EMBA']['name']?></option>
		<option class="38" value="<?=$url['HMBA']['ind']?>"><?=$url['HMBA']['name']?></option>
		<option class="38" value="<?=$url['NITRO']['ind']?>"><?=$url['NITRO']['name']?></option>
		<option class="38" value="<?=$url['NIMBA']['ind']?>"><?=$url['NIMBA']['name']?></option>
		<option class="38" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Indiana Retailer -->
		<option class="39" value="99">Please Select</option>
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
		<option class="28" value="<?=$cita_ind_url?>">Central Iowa Trail Association (CITA)</option>
		<option class="28" value="<?=$url['LAMBA']['ind']?>"><?=$url['LAMBA']['name']?></option>
		<option class="28" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Iowa Retailer -->
		<option class="29" value="99">Please Select</option>
		<option class="29" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Central Iowa Trail Association (CITA)'?>">Central Iowa Trail Association (CITA)</option>
		<option class="29" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Linn Area Mountain Bike Association (LAMBA)'?>">Linn Area Mountain Bike Association (LAMBA)</option>
		<option class="29" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Kentucky -->
		<option class="56" value="99">Please Select</option>
		<option class="56" value="<?=$url['EMBA']['ind']?>"><?=$url['EMBA']['name']?></option>
		<option class="56" value="<?=$url['KyMBA Louisville']['ind']?>"><?=$url['KyMBA Louisville']['name']?></option>
		<option class="56" value="<?=$url['SKYMBA']['fam']?>"><?=$url['SKYMBA']['name']?></option>
		<option class="56" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Kentucky Retailer -->
		<option class="57" value="99">Please Select</option>
		<option class="57" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Evansville Mountain Bike Association (EMBA)'?>">Evansville Mountain Bike Association (EMBA)</option>
		<option class="57" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Kentucky Mountain Bike Association - Louisville (KyMBA Louisville)'?>">Kentucky Mountain Bike Association - Louisville (KyMBA Louisville)</option>
		<option class="57" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Southwest Kentucky Mountain Bike Association (SKyMBA)'?>">Southwest Kentucky Mountain Bike Association (SKyMBA)</option>
		<option class="57" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Maryland -->
		<option class="46" value="99">Please Select</option>
		<option class="46" value="<?=$dts_ind_url?>">Delaware Trail Spinners (DTS)</option>
		<option class="46" value="<?=$url['ESIMBA']['ind']?>"><?=$url['ESIMBA']['name']?></option>
		<option class="46" value="<?=$url['MORE']['ind']?>"><?=$url['MORE']['name']?></option>
		<option class="46" value="<?=$url['SMMB']['ind']?>"><?=$url['SMMB']['name']?></option>
		<option class="46" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Maryland Retailer -->
		<option class="47" value="99">Please Select</option>
		<option class="47" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Delaware Trail Spinners (DTS)'?>">Delaware Trail Spinners (DTS)</option>
		<option class="47" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Eastern Shore IMBA (ESIMBA)'?>">Eastern Shore IMBA (ESIMBA)</option>
		<option class="47" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Mid-Atlantic Off-Road Enthusiasts (MORE)'?>">Mid-Atlantic Off-Road Enthusiasts (MORE)</option>
		<option class="47" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Southern Maryland Mountain Biking (SMMB)'?>">Southern Maryland Mountain Biking (SMMB)</option>
		<option class="47" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Michigan -->
		<option class="32" value="99">Please Select</option>
		<option class="32" value="<?=$chtc_ind_url?>">Copper Harbor Trails Club (CTHC)</option>
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
		<option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=None'?>">No Chapter</option>
		<option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Copper Harbor Trails Club (CHTC)'?>">Copper Harbor Trails Club (CHTC)</option>
		<option class="33" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=Clinton River Area Mountain Bike Association (CRAMBA)'?>">Clinton River Area Mountain Bike Association (CRAMBA)</option>
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
		<option class="2" value="<?=$morc_ind_url?>">Minnesota Off-Road Cyclists (MORC)</option>
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
		<option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Minnesota Off-Road Cyclists (MORC)'?>">Minnesota Off-Road Cyclists (MORC)</option>
		<option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Red Wing Area Mountain Bike Organization (RAMBO)'?>">Red Wing Area Mountain Bike Organization (RAMBO)</option>
		<option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Superior Cycling Association (SCA)'?>">Superior Cycling Association (SCA)</option>
		<option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Winona Area Mountain Bikers (WAMB)'?>">Winona Area Mountain Bikers (WAMB)</option>
		<option class="3" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Woolly Bike Club (WBC)'?>">Woolly Bike Club (WBC)</option>
		<option class="3" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
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
    	<option class="72" value="<?=$url['PU']['ind']?>"><?=$url['PU']['name']?></option>
		<option class="72" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Montana Retailer -->
		<option class="73" value="99">Please Select</option>
		<option class="73" value="<?=$retail_url . '&custom_76=None&custom_77=Bitterroot Backcountry Cyclists (BBC)'?>">Bitterroot Backcountry Cyclists (BBC)</option>
		<option class="73" value="<?=$retail_url . '&custom_76=None&custom_77=Pedal United'?>">Pedal United</option>
		<option class="73" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Nevada -->
		<option class="40" value="99">Please Select</option>
		<option class="40" value="<?=$url['SNMBA']['ind']?>"><?=$url['SNMBA']['name']?></option>
		<option class="40" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Nevada Retailer -->
		<option class="41" value="99">Please Select</option>
		<option class="41" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Southern Nevada Mountain Bike Association (SNMBA)'?>">Southern Nevada Mountain Bike Association (SNMBA)</option>
		<option class="41" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- New Mexico -->
		<option class="34" value="99">Please Select</option>
		<option class="34" value="<?=$url['DNMA']['ind']?>"><?=$url['DNMA']['name']?></option>
		<option class="34" value="<?=$url['FooMTB']['ind']?>"><?=$url['FooMTB']['name']?></option>
		<option class="34" value="<?=$url['GT']['ind']?>"><?=$url['GT']['name']?></option>
		<option class="34" value="<?=$url['LASA']['ind']?>"><?=$url['LASA']['name']?></option>
		<option class="34" value="<?=$sffts_ind_url?>">Santa Fe Fat Tire Society (SFFTS)</option>
		<option class="34" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- New Mexico Retailer -->
		<option class="35" value="99">Please Select</option>
		<option class="35" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Del Norte MtB Alliance (DNMA)'?>">Del Norte MtB Alliance (DNMA)</option>
		<option class="35" value="<?=$retail_url . '&custom_76=Rockies&custom_77=FooMTB Trail Partners (FooMTB)'?>">FooMTB Trail Partners (FooMTB)</option>
		<option class="35" value="<?=$retail_url . '&custom_76=Rockies&custom_77=Gallup Trails (GT)'?>">Gallup Trails (GT)</option>
		<option class="35" value="<?=$retail_url . '&custom_76=Rockies&custom_77=Los Alamos Singletrack Association (LASA)'?>">Los Alamos Singletrack Association (LASA)</option>
		<option class="35" value="<?=$retail_url . '&custom_76=Rockies&custom_77=Santa Fe Fat Tire Society (SFFTS)'?>">Santa Fe Fat Tire Society (SFFTS)</option>
		<option class="35" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- New York -->
		<option class="44" value="99">Please Select</option>
		<option class="44" value="<?=$url['CAMBA-NY']['ind']?>"><?=$url['CAMBA-NY']['name']?></option>
		<option class="44" value="<?=$url['Cycle-CNY']['ind']?>"><?=$url['Cycle-CNY']['name']?></option>
		<option class="44" value="<?=$url['FCBC']['ind']?>"><?=$url['FCBC']['name']?></option>
		<option class="44" value="<?=$url['GROC']['ind']?>"><?=$url['GROC']['name']?></option>
		<option class="44" value="<?=$url['NYCMTB']['ind']?>"><?=$url['NYCMTB']['name']?></option>
		<option class="44" value="<?=$url['WNYMBA']['ind']?>"><?=$url['WNYMBA']['name']?></option>
		<option class="44" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- New York Retailer -->
		<option class="45" value="99">Please Select</option>
		<option class="45" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Central Adirondack Mountain Bike Assocation (CAMBA)'?>">Central Adirondack Mountain Bike Assocation (CAMBA)</option>
		<option class="45" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Cycle-CNY'?>">Cycle-CNY</option>
		<option class="45" value="<?=$retail_url . '&custom_76=Northeast&custom_77=Fats In The Cats (FCBC)'?>">Fats In The Cats (FCBC)</option>
		<option class="45" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Genesee Regional Off-Road Cyclists (GROC)'?>">Genesee Regional Off-Road Cyclists (GROC)</option>
		<option class="45" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=New York City Mountain Bike Association (NYCMTB)'?>">New York City Mountain Bike Association (NYCMTB)</option>
		<option class="45" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Western New York Mountain Bicycling Association (WNYMBA)'?>">Western New York Mountain Bicycling Association (WNYMBA)</option>
		<option class="45" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- North Carolina -->
		<option class="20" value="99">Please Select</option>
		<option class="20" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Cape Fear SORBA'?>">Cape Fear SORBA</option>
		<option class="20" value="<?=$url['GFTS']['ind']?>"><?=$url['GFTS']['name']?></option>
		<option class="20" value="<?=$url['NAS']['ind']?>"><?=$url['NAS']['name']?></option>
		<option class="20" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Northwest North Carolina Mountain Bike Alliance (NWNC-MTBA)'?>">Northwest North Carolina Mountain Bike Alliance (NWNC-MTBA)</option>
		<option class="20" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Pisgah Area SORBA (PAS)'?>">Pisgah Area SORBA (PAS)</option>
		<option class="20" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Triangle Off-Road Cyclists (TORC)'?>">Triangle Off-Road Cyclists (TORC)</option>
		<option class="20" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Tarheel Trailblazers'?>">Tarheel Trailblazers</option>
		<option class="20" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
<!-- North Carolina Retailer -->
		<option class="21" value="99">Please Select</option>
		<option class="21" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Cape Fear SORBA'?>">Cape Fear SORBA</option>
		<option class="21" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Greensboro Fat Tire Society (GFTS)'?>">Greensboro Fat Tire Society (GFTS)</option>
		<option class="21" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Nantahala Area SORBA (NAS)'?>">Nantahala Area SORBA (NAS)</option>
		<option class="21" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Northwest North Carolina Mountain Bike Alliance (NWNC-MTBA)'?>">Northwest North Carolina Mountain Bike Alliance (NWNC-MTBA)</option>
		<option class="21" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Pisgah Area SORBA (PAS)'?>">Pisgah Area SORBA (PAS)</option>
		<option class="21" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Triangle Off-Road Cyclists (TORC)'?>">Triangle Off-Road Cyclists (TORC)</option>
		<option class="21" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Tarheel Trailblazers'?>">Tarheel Trailblazers</option>
		<option class="21" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
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
		<option class="6" value="<?=$dod_ind_url?>">Disciples of Dirt (DOD)</option>
		<option class="6" value="<?=$goats_ind_url?>">Greater Oakridge Area Trail Stewards (GOATS)</option>
		<option class="6" value="<?=$url['HRATS']['ind']?>"><?=$url['HRATS']['name']?></option>
		<option class="6" value="<?=$nwta_ind_url?>">Northwest Trail Alliance (NWTA)</option>
		<option class="6" value="<?=$url['RVMBA']['ind']?>"><?=$url['RVMBA']['name']?></option>
		<option class="6" value="<?=$url['SATA']['ind']?>"><?=$url['SATA']['name']?></option>
		<option class="6" value="<?=$url['Team Dirt']['ind']?>"><?=$url['Team Dirt']['name']?></option>
		<option class="6" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Oregon Retailer -->
		<option class="7" value="99">Please Select</option>
		<option class="7" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Blue Mountain Singletrack Trails Club (BMSTC)'?>">Blue Mountain Singletrack Trails Club (BMSTC)</option>
		<option class="7" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Disciples of Dirt (DOD)'?>">Disciples of Dirt (DOD)</option>
		<option class="7" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Greater Oakridge Area Trail Stewards (GOATS)'?>">Greater Oakridge Area Trail Stewards (GOATS)</option>
		<option class="7" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Hood River Area Trail Stewards (HRATS)'?>">Hood River Area Trail Stewards (HRATS)</option>
		<option class="7" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Northwest Trail Alliance (NWTA)'?>">Northwest Trail Alliance (NWTA)</option>
		<option class="7" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Rogue Valley Mountain Bike Association (RVMBA)'?>">Rogue Valley Mountain Bike Association (RVMBA)</option>
		<option class="7" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Salem Area Trail Alliance (SATA)'?>">Salem Area Trail Alliance (SATA)</option>
		<option class="7" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Team Dirt'?>">Team Dirt</option>
		<option class="7" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Pennsylvania -->
		<option class="50" value="99">Please Select</option>
		<option class="50" value="<?=$url['AMP']['ind']?>"><?=$url['AMP']['name']?></option>
		<option class="50" value="<?=$url['BEMBA']['ind']?>"><?=$url['BEMBA']['name']?></option>
		<option class="50" value="<?=$url['BAMBA-PA']['fam']?>"><?=$url['BAMBA-PA']['name']?></option>
		<option class="50" value="<?=$dts_ind_url?>">Delaware Trail Spinners (DTS)</option>
		<option class="50" value="<?=$url['NAMBA']['ind']?>"><?=$url['NAMBA']['name']?></option>
		<option class="50" value="<?=$url['PT']['ind']?>"><?=$url['PT']['name']?></option>
		<option class="50" value="<?=$url['SEPTR']['ind']?>"><?=$url['SEPTR']['name']?></option>
		<option class="50" value="<?=$url['SAMBA']['fam']?>"><?=$url['SAMBA']['name']?></option>
    	<option class="50" value="<?=$url['SVVC']['ind']?>"><?=$url['SVVC']['name']?></option>
		<option class="50" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Pennsylvania Retailer -->
		<option class="51" value="99">Please Select</option>
		<option class="51" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Anthracite Mountain Pedalers (AMP)'?>">Anthracite Mountain Pedalers (AMP)</option>
		<option class="51" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Bald Eagle Mountain Bike Association (BEMBA)'?>">Bald Eagle Mountain Bike Association (BEMBA)</option>
		<option class="51" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Berks Area Mountain Biking Association (BAMBA)'?>">Berks Area Mountain Biking Association (BAMBA)</option>
		<option class="51" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Delaware Trail Spinners (DTS)'?>">Delaware Trail Spinners (DTS)</option>
		<option class="51" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Northern Allegheny Mountain Bike Association (NAMBA)'?>">Northern Allegheny Mountain Bike Association (NAMBA)</option>
		<option class="51" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Pocahontas Trails (PT)'?>">Pocahontas Trails (PT)</option>
		<option class="51" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Southeastern Pennsylvania Trail Riders (SEPTR)'?>">Southeastern Pennsylvania Trail Riders (SEPTR)</option>
		<option class="51" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Susquehanna Area Mountain Bike Association (SAMBA)'?>">Susquehanna Area Mountain Bike Association (SAMBA)</option>
		<option class="51" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Susquehanna Valley Velo Club (SVVC)'?>">Susquehanna Valley Velo Club (SVVC)</option>
		<option class="51" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- South Carolina -->
		<option class="24" value="99">Please Select</option>
		<option class="24" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Augusta-GA and Aiken-SC (CSRA)'?>">Augusta-GA and Aiken-SC (CSRA)</option>
		<option class="24" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Gainesville SORBA'?>">Gainesville SORBA</option>
		<option class="24" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Midlands SORBA'?>">Midlands SORBA</option>
		<option class="24" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Upstate SORBA'?>">Upstate SORBA</option>
		<option class="24" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
<!-- South Carolina Retailer -->
		<option class="25" value="99">Please Select</option>
		<option class="25" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Augusta-GA and Aiken-SC (CSRA)'?>">Augusta-GA and Aiken-SC (CSRA)</option>
		<option class="25" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Gainesville SORBA'?>">Gainesville SORBA</option>
		<option class="25" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Midlands SORBA'?>">Midlands SORBA</option>
		<option class="25" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Upstate SORBA'?>">Upstate SORBA</option>
		<option class="25" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
<!-- Tennessee -->
		<option class="0" value="99">Please Select</option>
		<option class="0" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Appalachian Mountain Bike Club (AMBC SORBA)'?>">Appalachian Mountain Bike Club (AMBC SORBA)</option>
		<option class="0" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=SORBA Chattanooga (CASA)'?>">SORBA Chattanooga (CASA)</option>
		<option class="0" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=SORBA Middle Tennessee'?>">SORBA Middle Tennessee</option>
		<option class="0" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=SORBA Tri-Cities'?>">SORBA Tri-Cities</option>
		<option class="0" value="<?=$sorba_ind_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
<!-- Tennessee Retailer -->
		<option class="90" value="99">Please Select</option>
		<option class="90" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Appalachian Mountain Bike Club (AMBC SORBA)'?>">Appalachian Mountain Bike Club (AMBC SORBA)</option>
		<option class="90" value="<?=$retail_url . '&custom_76=SORBA&custom_77=SORBA Chattanooga (CASA)'?>">SORBA Chattanooga (CASA)</option>
		<option class="90" value="<?=$retail_url . '&custom_76=SORBA&custom_77=SORBA Middle Tennessee'?>">SORBA Middle Tennessee</option>
		<option class="90" value="<?=$retail_url . '&custom_76=SORBA&custom_77=SORBA Tri-Cities'?>">SORBA Tri-Cities</option>
		<option class="90" value="<?=$retail_url . '&custom_76=SORBA&custom_77=Unassigned'?>">I don't have a local chapter or my club is not listed</option>
<!-- Texas -->
		<option class="68" value="99">Please Select</option>
		<option class="68" value="<?=$url['BMBA']['ind']?>"><?=$url['BMBA']['name']?></option>
		<option class="68" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Texas Retailer -->
		<option class="69" value="99">Please Select</option>
		<option class="69" value="<?=$retail_url . '&custom_76=None&custom_77=Borderland Mountain Bike Association (BMBA)'?>">Borderland Mountain Bike Association (BMBA)</option>
		<option class="69" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Utah -->
		<option class="52" value="99">Please Select</option>
		<option class="52" value="<?=$url['DMBTA']['ind']?>"><?=$url['DMBTA']['name']?></option>
		<option class="52" value="<?=$url['MMBA']['ind']?>"><?=$url['MMBA']['name']?></option>
		<option class="52" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Utah Retailer -->
		<option class="53" value="99">Please Select</option>
		<option class="53" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Dixie Mountain Bike Trails Association (DMBTA)'?>">Dixie Mountain Bike Trails Association (DMBTA)</option>
		<option class="53" value="<?=$retail_url . '&custom_76=Southwest&custom_77=Moab Mountain Bike Association (MMBA)'?>">Moab Mountain Bike Association (MMBA)</option>
		<option class="53" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Virginia -->
		<option class="26" value="99">Please Select</option>
		<option class="26" value="<?=$cambc_ind_url?>">Charlottesville Area Mountain Bike Club (CAMBC)</option>
		<option class="26" value="<?=$url['FATMUG']['ind']?>"><?=$url['FATMUG']['name']?></option>
		<option class="26" value="<?=$url['GLOC']['ind']?>"><?=$url['GLOC']['name']?></option>
		<option class="26" value="<?=$url['MORE']['ind']?>"><?=$url['MORE']['name']?></option>
		<option class="26" value="<?=$url['RA-MORE']['ind']?>"><?=$url['RA-MORE']['name']?></option>
		<option class="26" value="<?=$url['RIMBA']['ind']?>"><?=$url['RIMBA']['name']?></option>
		<option class="26" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Virginia Retailer -->
		<option class="27" value="99">Please Select</option>
		<option class="27" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Charlottesville Area Mountain Bike Club (CAMBC)'?>">Charlottesville Area Mountain Bike Club (CAMBC)</option>
		<option class="27" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Fredericksburg Area Trail Management and User Group (FATMUG)'?>">Fredericksburg Area Trail Management and User Group (FATMUG)</option>
		<option class="27" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Greater Lynchburg Off-Road Cyclists (GLOC)'?>">Greater Lynchburg Off-Road Cyclists (GLOC)</option>
		<option class="27" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Mid-Atlantic Off-Road Enthusiasts (MORE)'?>">Mid-Atlantic Off-Road Enthusiasts (MORE)</option>
		<option class="27" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Richmond Mid-Atlantic Off Road Enthusiasts (RA-MORE)'?>">Richmond Mid-Atlantic Off Road Enthusiasts (RA-MORE)</option>
		<option class="27" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Roanoke IMBA (RIMBA)'?>">Roanoke IMBA (RIMBA)</option>
		<option class="27" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Washington -->
		<option class="8" value="99">Please Select</option>
		<option class="8" value="<?=$url['FTR']['ind']?>"><?=$url['FTR']['name']?></option>
		<option class="8" value="<?=$url['HRATS']['ind']?>"><?=$url['HRATS']['name']?></option>
		<option class="8" value="<?=$nwta_ind_url?>">Northwest Trail Alliance (NWTA)</option>
		<option class="8" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Washington Retailer -->
		<option class="9" value="99">Please Select</option>
		<option class="9" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Fidalgo Trail Riders (FTR)'?>">Fidalgo Trail Riders (FTR)</option>
		<option class="9" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Hood River Area Trail Stewards (HRATS)'?>">Hood River Area Trail Stewards (HRATS)</option>
		<option class="9" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Northwest Trail Alliance (NWTA)'?>">Northwest Trail Alliance (NWTA)</option>
		<option class="9" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- West Virginia -->
		<option class="58" value="99">Please Select</option>
		<option class="58" value="<?=$url['NRBU']['ind']?>"><?=$url['NRBU']['name']?></option>
		<option class="58" value="<?=$url['PT']['ind']?>"><?=$url['PT']['name']?></option>
		<option class="58" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- West Virginia Retailer -->
		<option class="59" value="99">Please Select</option>
		<option class="59" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=New River Bicycle Union (NRBU)'?>">New River Bicycle Union (NRBU)</option>
		<option class="59" value="<?=$retail_url . '&custom_76=Mid-Atlantic&custom_77=Pocahontas Trails (PT)'?>">Pocahontas Trails (PT)</option>
		<option class="59" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Wisconsin -->
		<option class="36" value="99">Please Select</option>
		<option class="36" value="<?=$url['CORP']['ind']?>"><?=$url['CORP']['name']?></option>
		<option class="36" value="<?=$url['CWOCC']['ind']?>"><?=$url['CWOCC']['name']?></option>
		<option class="36" value="<?=$url['CAMBA']['ind']?>"><?=$url['CAMBA']['name']?></option>
		<option class="36" value="<?=$url['CORBA-WI']['ind']?>"><?=$url['CORBA-WI']['name']?></option>
		<option class="36" value="<?=$url['KORC']['ind']?>"><?=$url['KORC']['name']?></option>
		<option class="36" value="<?=$url['Metro']['ind']?>"><?=$url['Metro']['name']?></option>
		<option class="36" value="<?=$url['NEWT']['ind']?>"><?=$url['NEWT']['name']?></option>
		<option class="36" value="<?=$url['SKMCI']['ind']?>"><?=$url['SKMCI']['name']?></option>
		<option class="36" value="<?=$url['WAMB']['ind']?>"><?=$url['WAMB']['name']?></option>
		<option class="36" value="<?=$url['WBC']['ind']?>"><?=$url['WBC']['name']?></option>
		<option class="36" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Wisconsin Retailer -->
		<option class="37" value="99">Please Select</option>
		<option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Capital Off Road Pathfinders (CORP)'?>">Capital Off Road Pathfinders (CORP)</option>
		<option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Central Wisconsin Off-Road Cycling Coalition (CWOCC)'?>">Central Wisconsin Off-Road Cycling Coalition (CWOCC)</option>
		<option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Chequamegon Area Mountain Bike Association (CAMBA)'?>">Chequamegon Area Mountain Bike Association (CAMBA)</option>
		<option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Chippewa Off Road Bike Association (CORBA)'?>">Chippewa Off Road Bike Association (CORBA)</option>
		<option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Kinnickinnic Off-Road Cyclists (KORC)'?>">Kinnickinnic Off-Road Cyclists (KORC)</option>
		<option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Metro Mountain Bikers, Milwaukee (Metro)'?>">Metro Mountain Bikers, Milwaukee (Metro)</option>
		<option class="37" value="<?=$retail_url . '&custom_76=Great Lakes&custom_77=North East Wisconsin Trails (NEWT)'?>">North East Wisconsin Trails (NEWT)</option>
		<option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Southern Kettle Moraine Chapter of IMBA (SKMCI)'?>">Southern Kettle Moraine Chapter of IMBA (SKMCI)</option>
		<option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Winona Area Mountain Bikers (WAMB)'?>">Winona Area Mountain Bikers (WAMB)</option>
		<option class="37" value="<?=$retail_url . '&custom_76=Midwest&custom_77=Woolly Bike Club (WBC)'?>">Woolly Bike Club (WBC)</option>
		<option class="37" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Wyoming -->
		<option class="62" value="99">Please Select</option>
		<option class="62" value="<?=$url['MBT']['ind']?>"><?=$url['MBT']['name']?></option>
	    <option class="62" value="<?=$url['BMCC']['ind']?>"><?=$url['BMCC']['name']?></option>
		<option class="62" value="<?=$imba_ind_url?>">I don't have a local chapter or my club is not listed</option>
<!-- Wyoming Retailer -->
		<option class="63" value="99">Please Select</option>
		<option class="63" value="<?=$retail_url . '&custom_76=Colorado-Wyoming&custom_77=Mountain Bike the Tetons (MBT)'?>">Mountain Bike the Tetons (MBT)</option>
		<option class="63" value="<?=$retail_url . '&custom_76=Pacific&custom_77=Bomber Mountain Cycling Club (BMCC)'?>">Bomber Mountain Cycling Club (BMCC)</option>
		<option class="63" value="<?=$retail_url?>">I don't have a local chapter or my club is not listed</option>
	</select>
	<center>
	</div>
	</td>
	</tr>
</table>