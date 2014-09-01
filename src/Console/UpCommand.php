<?php namespace Alexdover\Scaffolder\Console;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Yaml\Yaml as YamlParser;

class UpCommand extends \Symfony\Component\Console\Command\Command {

	/**
	 * Configure the command options.
	 *
	 * @return void
	 */
	protected function configure()
	{
		$this->setName('up')->setDescription('Bring up a new Laravel Installation.');
	}

	/**
	 * Execute the command.
	 *
	 * @param  InputInterface  $input
	 * @param  OutputInterface  $output
	 * @return void
	 */
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		// $output->writeln('<info>Hello!</info>');

		$yaml_config = file_get_contents('playbook.yml');

		$config = YamlParser::parse($yaml_config);

		var_export($config);
	}

}