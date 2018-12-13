import * as React from "react"
import Axios, { AxiosResponse, AxiosRequestConfig, AxiosPromise } from 'axios'

import { Chat } from "./Chat"

interface ChannelProps {
  compiler: string
  framework: string
}
interface Data {
  showChannels: boolean
  channels: any
  channel: number
  message: string
  isLoading: boolean
}

export class Canal extends React.Component<ChannelProps, Data> {
  constructor(props: any) {
    super(props)

    this.state = {
      showChannels: false,
      channels: [],
      channel: 0,
      message: '',
      isLoading: false
    }

    this.child = React.createRef()
    this.handleChange = this.handleChange.bind(this)
    this.handleSubmit = this.handleSubmit.bind(this)
    this.setShowChannels = this.setShowChannels.bind(this)
    this.showChannels = this.showChannels.bind(this)
  }
  async getDataJson() {
    return await Axios.get('/chat/get-data', { headers: {'X-Requested-With': 'XMLHttpRequest'} })
  }
  async getData() {
    // On met l'etat de chargement avant de procéder aux vérifications
    this.setLoading(true)

    try {
      const rawData = await this.getDataJson()
      const data = rawData.data
      const channels = data.channel

      this.setState({
        channels: channels
      })
      this.setLoading(false)
    } catch (err) {
      console.error(err)
    }
  }
  async componentDidMount() {
    try {
      await this.getData()

      // We join the first channel
      this.changeChannel(this.state.channel)

      // We automatically refresh the data
      await this.autoRefresh()
    } catch(err) {
      console.error(err)
    }
  }
  setLoading(isIt: boolean) {
    this.setState(prevState => ({
      ... prevState,
      isLoading: isIt
    }))
  }
  async refresh(channel: number) {
    // On met à jour le canal
    await this.getData()
    // Et les messages associés
    this.child.current.getMessages(channel)
  }
  async autoRefresh() {
    try {
      setTimeout(() => this.autoRefresh(), 742)

      // On ne rafraichis pas si aucun canal n'est selectionné
      if (this.state.channel !== null) {
        const rawState = {
          channel: this.state.channels
        }
        const rawData = (await this.getDataJson()).data

        // On ne rafraichis pas non plus si le fichier est égal à la copie locale présente dans this.state
        if(JSON.stringify(rawState) !== JSON.stringify(rawData)) {
          await this.refresh(this.state.channel)
        }
      }
    } catch(err) {
      console.error(err)
    }
  }
  async handleChange(event: any) {
    const message = event.target.value

    // Le formulaire de rédaction de message est traité ici
    this.setState(prevState => ({
      ... prevState,
      message: message,
      isLoading: false
    }))
  }
  async handleSubmit(event: any) {
    event.preventDefault()
    const message = this.state.message

    // On réinitialise le formulaire
    event.target.reset()
    this.setState(prevState => ({
      ... prevState,
      message: '',
      isLoading: false
    }))

    // On met à jour la base de donnée JSON depuis le backend
    await Axios.post('/chat/post-data', {
      channel: this.state.channel,
      message: message
    }, {headers: {'X-Requested-With': 'XMLHttpRequest'}})

    // On invoque un rafraichissement du component
    await this.refresh(this.state.channel)
  }
  changeChannel(channel: number) {
    this.setState(prevState => ({
      ... prevState,
      channel: channel,
      isLoading: false
    }))
    // Lorsque l'on clique sur un autre  canal, on re-charge les données et on met à jour le canal actuel
    this.child.current.getMessages(channel)
  }
  setShowChannels() {
    this.setState({
      showChannels: !this.state.showChannels
    })
  }
  showChannels() {
    if (this.state.showChannels) {
      return (
        <ul className="channels">
          { this.state.channels.map((channel: any, index: number) => (
            <li { this.state.channel === index && ( true && { className:'active' } ) } key={index}><a onClick={() => this.changeChannel(index)}>{ channel.name }</a></li>
          )) }
        </ul>
      )
    }
  }
  render() {
    return (
      <div>
        {this.showChannels()}
        <a className="disconnect" href="/chat/logoff"><i className="fas fa-sign-out-alt"></i></a>
        <a className="showChannels" onClick={this.setShowChannels}><i className="fas fa-ellipsis-v"></i></a>
        <Chat ref={this.child} data={this.state.channels} />
        <form onSubmit={this.handleSubmit}>
          <div className="form-group">
            <input className="form-control message-form" value={this.state.value} onChange={this.handleChange} autoFocus />
          </div>
          <input type="submit" value="Envoyer" />
        </form>
      </div>
    )
  }
}
