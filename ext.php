<?php
/**
*
* @package phpBB Extension - Add Bot
* @copyright (c) 2020 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\addbot;

class ext extends \phpbb\extension\base
{
	const PHPBB_MINIMUM = '3.3.0';

	protected $errors = [];

	public function is_enableable()
	{
		return $this->check_phpbb_version()
			->result();
	}

	protected function check_phpbb_version()
	{
		if (phpbb_version_compare(PHPBB_VERSION, self::PHPBB_MINIMUM, '<'))
		{
			$this->errors[] = 'ADDBOT_VERSION_ERROR';
		}

		return $this;
	}

	protected function result()
	{
		if (empty($this->errors))
		{
			return true;
		}

		if (phpbb_version_compare(PHPBB_VERSION, '3.3.0-b1', '>='))
		{
			$language = $this->container->get('language');
			$language->add_lang('info_acp_addbot', 'dmzx/addbot');
			return array_map([$language, 'lang'], $this->errors);
		}

		return false;
	}
}
