<?php

/**
 * Copyright 2014 Underground Elephant
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package     qpush-bundle
 * @copyright   Underground Elephant 2014
 * @license     Apache License, Version 2.0
 */

namespace Uecode\Bundle\QpushBundle\Tests\Message;

use Uecode\Bundle\QPushBundle\Message\Message;

/**
 * @author Keith Kirk <kkirk@undergroundelephant.com>
 */
class MessageTest extends BaseMessageTest
{
    public function setUp()
    {
        $this->message = new Message(123, ['foo' => 'bar'], ['baz' => 'qux']);
    }

    public function tearDown()
    {
        $this->message = null;
    }

    public function testConstructor()
    {
        $message = new Message(123, ['foo' => 'bar'], ['baz' => 'qux']);
        $this->assertInstanceOf('Uecode\Bundle\QPushBundle\Message\Message', $message);

        $this->setExpectedException('PHPUnit_Framework_Error');
        new Message(123, ['foo' => 'bar'], 'invalid argument');
    }
}
