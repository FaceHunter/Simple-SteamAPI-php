<?php
class steamAPI
{
	private $key;
	public function __construct($APIkey)
	{
		$this->key = $APIkey;
	}

	// _callAPI
	// internal API call function
	private function _callAPI($interface, $method, $version, $KeyValueArray=NULL)
	{
		if(count($KeyValueArray) == 1)
		{
			$key = key($KeyValueArray);
			$url = sprintf("http://api.steampowered.com/$interface/$method/$version/?key=%s&%s=%s",$this->key, $key, $KeyValueArray[$key]);
			echo($url);
			$json = file_get_contents($url);
			$data = json_decode($json, TRUE);
			return $data;
		}
		elseif($KeyValueArray==NULL)
		{
			$url = sprintf("http://api.steampowered.com/$interface/$method/$version/?key=%s",$this->key);
			$json = file_get_contents($url);
			$data = json_decode($json, TRUE);
			return $data;
		}
		else
		{
			$string = "";
			foreach($KeyValueArray as $row)
			{
				$key = key($row);
				$value = $KeyValueArray[$key];
				$string += "&".$key+"=".$value;
			}
			$url = sprintf("http://api.steampowered.com/$interface/$method/$version/?key=%s%s",$this->key,$string);
			$json = file_get_contents($url);
			$data = json_decode($json, TRUE);
			return $data;
		}
	}
	
	// GetUserStatsForGame
	// =============================================================================
	// Gets the users' stats for a game
	// IN:
	//		<string> $appid = The steamID of the app
	//		<string> $steamID = The steamID (ID64) of a user_error
	//		<Array>  $keys = A list of returned keys
	// OUT:
	//		<Array>  The full API Array or an Array with the keys provided in $keys
	// =============================================================================
	public function GetUserStatsForGame($appid,$steamID, $keys=null)
	{
		$data = $this->_callAPI("ISteamUserStats", "GetUserStatsForGame", "v0002", Array("appid" => $appid, "steamid" => $steamID));
		if($keys != null)
		{
			$retarr = Array();
			foreach($keys as $key)
			{
				$retarr[$key] = $data[$key];
			}
			return $retarr;
		}
		return $data;
	}
	
	// ResolveVanityURL
	// =============================================================================
	// Resolves the id or custom url to ID64
	// IN:
	//		<string> $vanityURL = the id or custom url
	//		<Array>  $keys = A list of returned keys
	// OUT:
	//		<Array>  The full API Array or an Array with the keys provided in $keys
	// =============================================================================
	public function ResolveVanityURL($vanityURL, $keys=NULL)
	{
		$data = $this->_callAPI("ISteamUser", "ResolveVanityURL", "v0001", Array("vanityurl" => $vanityURL));
		if($keys != null)
		{
			$retarr = Array();
			foreach($keys as $key)
			{
				$retarr[$key] = $data[$key];
			}
			return $retarr;
		}
		return $data;
	}
	
	//GetNewsForApp (v0002)
	public function GetNewsForApp()
	{
		$data = $this->_callAPI(, , , Array());
		if($keys != null)
		{
			$retarr = Array();
			foreach($keys as $key)
			{
				$retarr[$key] = $data[$key];
			}
			return $retarr;
		}
		return $data;
	}
	
	// GetGlobalAchievementPercentagesForApp (v0002)
	public function GetGlobalAchievementPercentagesForApp()
	{
		$data = $this->_callAPI(, , , Array());
		if($keys != null)
		{
			$retarr = Array();
			foreach($keys as $key)
			{
				$retarr[$key] = $data[$key];
			}
			return $retarr;
		}
		return $data;
	}
	
	//GetPlayerSummaries (v0002)
	public function GetPlayerSummaries()
	{
		$data = $this->_callAPI(, , , Array());
		if($keys != null)
		{
			$retarr = Array();
			foreach($keys as $key)
			{
				$retarr[$key] = $data[$key];
			}
			return $retarr;
		}
		return $data;
	}
	
	//GetFriendList (v0001)
	public function GetFriendList()
	{
		$data = $this->_callAPI(, , , Array());
		if($keys != null)
		{
			$retarr = Array();
			foreach($keys as $key)
			{
				$retarr[$key] = $data[$key];
			}
			return $retarr;
		}
		return $data;
	}
	
	//GetPlayerAchievements (v0001)
	public function GetPlayerAchievements()
	{
		$data = $this->_callAPI(, , , Array());
		if($keys != null)
		{
			$retarr = Array();
			foreach($keys as $key)
			{
				$retarr[$key] = $data[$key];
			}
			return $retarr;
		}
		return $data;
	}
	
	//GetOwnedGames (v0001)
	public function GetOwnedGames()
	{
		$data = $this->_callAPI(, , , Array());
		if($keys != null)
		{
			$retarr = Array();
			foreach($keys as $key)
			{
				$retarr[$key] = $data[$key];
			}
			return $retarr;
		}
		return $data;
	}
	
	//GetRecentlyPlayedGames (v0001)
	public function GetRecentlyPlayedGames()
	{
		$data = $this->_callAPI(, , , Array());
		if($keys != null)
		{
			$retarr = Array();
			foreach($keys as $key)
			{
				$retarr[$key] = $data[$key];
			}
			return $retarr;
		}
		return $data;
	}
	
	//IsPlayingSharedGame (v0001)
	public function IsPlayingSharedGame(){
		$data = $this->_callAPI(, , , Array());
		if($keys != null)
		{
			$retarr = Array();
			foreach($keys as $key)
			{
				$retarr[$key] = $data[$key];
			}
			return $retarr;
		}
		return $data;
	}
	
	
}

?>
