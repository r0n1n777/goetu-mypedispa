<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Video\V1\Room\Participant;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class SubscribeRulesOptions {
    /**
     * @param array $rules A JSON-encoded array of subscribe rules
     * @return UpdateSubscribeRulesOptions Options builder
     */
    public static function update(array $rules = Values::ARRAY_NONE): UpdateSubscribeRulesOptions {
        return new UpdateSubscribeRulesOptions($rules);
    }
}

class UpdateSubscribeRulesOptions extends Options {
    /**
     * @param array $rules A JSON-encoded array of subscribe rules
     */
    public function __construct(array $rules = Values::ARRAY_NONE) {
        $this->options['rules'] = $rules;
    }

    /**
     * A JSON-encoded array of subscribe rules. See the [Specifying Subscribe Rules](https://www.twilio.com/docs/video/api/track-subscriptions#specifying-sr) section for further information.
     *
     * @param array $rules A JSON-encoded array of subscribe rules
     * @return $this Fluent Builder
     */
    public function setRules(array $rules): self {
        $this->options['rules'] = $rules;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Video.V1.UpdateSubscribeRulesOptions ' . $options . ']';
    }
}