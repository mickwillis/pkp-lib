<?php

/**
 * @file classes/metadata/OpenUrlJournalSchema.inc.php
 *
 * Copyright (c) 2000-2010 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class OpenUrlJournalSchema
 * @ingroup metadata_openurl
 * @see OpenUrlJournalBookBaseSchema
 *
 * @brief Class that provides meta-data properties of the
 *  OpenURL journal 1.0 standard.
 */

// $Id$

import('metadata.openurl.OpenUrlJournalBookBaseSchema');

class OpenUrlJournalSchema extends OpenUrlJournalBookBaseSchema {
	/**
	 * Constructor
	 */
	function OpenUrlJournalSchema() {
		$this->setName('openurl-1.0-journal');

		parent::OpenUrlJournalBookBaseSchema();

		// Add meta-data properties that only appear in the OpenURL journal standard
		$citation = array(ASSOC_TYPE_CITATION);
		$this->addProperty(new MetadataProperty('jtitle', $citation));
		$this->addProperty(new MetadataProperty('stitle', $citation)); // Short title
		$this->addProperty(new MetadataProperty('chron', $citation));  // Enumeration or chronology in not-normalized form, e.g. "1st quarter"
		$this->addProperty(new MetadataProperty('ssn', $citation));    // Season
		$this->addProperty(new MetadataProperty('quarter', $citation));
		$this->addProperty(new MetadataProperty('volume', $citation));
		$this->addProperty(new MetadataProperty('part', $citation));   // A special subdivision of a volume or the highest level division of the journal
		$this->addProperty(new MetadataProperty('issue', $citation));
		$this->addProperty(new MetadataProperty('artnum', $citation)); // Number assigned by the publisher
		$this->addProperty(new MetadataProperty('eissn', $citation));
		$this->addProperty(new MetadataProperty('coden', $citation));
		$this->addProperty(new MetadataProperty('sici', $citation));
	}
}
?>