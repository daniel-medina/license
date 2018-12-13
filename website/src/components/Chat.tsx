import * as React from "react"
import * as Moment from "moment"
import Axios, { AxiosResponse, AxiosRequestConfig, AxiosPromise } from 'axios'

interface ChatProps {
  data: any
}
interface Message {
  date: string
  author: string
  content: string
}
interface Data {
  messages: Array<Message>
}

export class Chat extends React.Component<ChatProps, Data> {
  constructor(props: any) {
    super(props)

    this.state = {
      messages: []
    }
  }
  async getMessages(channel: number) {
    const channels = this.props.data
    this.setState({
      messages: channels[channel].messages
    })
  }
  async handleChange(event: any) {
    await this.getMessages(this.props.data)
  }
  async componentDidMount() {
    this.goEnBas()
  }
  componentDidUpdate() {
    this.goEnBas()
  }
  goEnBas() {
    this.end.scrollIntoView({ behavior: 'smooth' })
  }

  render() {
    return (
      <div className="col-lg-12 messages">
        <ul>
          { this.state.messages.map((message, index) => <li key={index}>
            <div className="message">
              <div className="tete">
                <div className="date">{message.date}</div>
                <div className="author">{message.author}</div>
              </div>
              <div className="content">{message.content}</div>
            </div>
          </li>) }
        </ul>
        <div ref={end => { this.end = end; }} />
      </div>
    )
  }
}
