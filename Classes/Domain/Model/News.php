<?php
class Tx_Newsfal_Domain_Model_News extends Tx_News_Domain_Model_News {
	/**
	 * @var string
	 */
	protected $txNewsfalImage;
	/**
	 * @var string
	 */
	public function getTxNewsfalImage() {
		$result = array();
		$fileRepository = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Resource\\FileRepository');
		$fileObjects = $fileRepository->findByRelation('tx_news_domain_model_news', 'file', $this->getUid());
		if(is_array($fileObjects)) {
			foreach ($fileObjects as $fO) {
				if (is_object($fO) && method_exists($fO, 'getPublicUrl') && $fO->getPublicUrl()) {
					$subResult = array();
					$subResult['uid'] = $fO->getUid();
					$subResult['title'] = $fO->getTitle();
					$subResult['description'] = $fO->getDescription();
					$subResult['caption'] = $fO->getProperty('caption');
					$subResult['public_url'] = $fO->getPublicUrl();
					$subResult['extension'] = $fO->getExtension();
					$subResult['size'] = $fO->getSize();
					$subResult['alt'] = $fO->getProperty('alternative');
					$subResult['creator'] = $fO->getProperty('creator');
					$subResult['width'] = $fO->getProperty('width');
					$subResult['height'] = $fO->getProperty('height');
					$subResult['creation_time'] = $fO->getCreationTime();
					$subResult['modification_time'] = $fO->getModificationTime();
					$result[] = $subResult;
				}
			}
			return $result;
		}
	}
}
?>